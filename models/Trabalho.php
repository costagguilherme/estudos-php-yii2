<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabalho".
 *
 * @property int $id
 * @property string $autor
 * @property string $orientador
 * @property string $link
 * @property string $tipo
 * @property int $created_at
 * @property int $updated_at
 */
class Trabalho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trabalho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['autor', 'orientador', 'link', 'tipo'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['autor', 'orientador'], 'string', 'max' => 255],
            [['link'], 'string', 'max' => 512],
            [['tipo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autor' => 'Autor',
            'orientador' => 'Orientador',
            'link' => 'Link',
            'tipo' => 'Tipo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
