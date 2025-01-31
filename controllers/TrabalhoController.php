<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class TrabalhoController extends Controller
{

    public function actionIndex()
    {
        return ['message' => 'olaaa'];
    }

    public function actionCreate() {
        $file = UploadedFile::getInstanceByName('file');
        $jsonData = Yii::$app->request->post('data');
        if ($file && $file->extension === 'pdf') {
            $directory = __DIR__ . "/uploads/";
            $filePath = $directory . $file->baseName . '.' . $file->extension;

            if ($file->saveAs($filePath)) {
                return ['message' => 'Arquivo enviado com sucesso!', 'filePath' => $filePath];
            } else {
                return ['error' => 'Erro ao salvar o arquivo.'];
            }
        }

        return ['error' => 'Arquivo inválido. Apenas PDFs são permitidos.'];
        

    }

    public function actionUpdate($id) {
        return ['id' => $id];
    }

    public function actionCep($cep) 
    {
        if (!preg_match('/^\d{5}\d{3}$/', $cep)) {
            return $this->asJson(['error' => 'CEP inválido']);
        }

        // URL da API viaCEP
        $url = "https://viacep.com.br/ws/{$cep}/json/";

        $response = file_get_contents($url);

        if ($response === false) {
            return $this->asJson(['error' => 'Erro ao buscar o CEP']);
        }

        $data = json_decode($response, true);

        if (isset($data['erro']) && $data['erro'] === true) {
            return $this->asJson(['error' => 'CEP não encontrado']);
        }

        return $this->asJson($data);
    }
    
  
}
