<?php
namespace app\controllers;

use yii\web\Controller;

class TrabalhoController extends Controller
{

    public function actionIndex()
    {
        return ['message' => 'olaaa'];
    }

    public function actionCreate() {
        return ['message' => 'ola']; 

    }

    public function actionUpdate($id) {
        return ['id' => $id];
    }
    
  
}
