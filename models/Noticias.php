<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $noticia
 * @property int $categoria
 * @property string $data
 *
 * @property NoticiasImg[] $noticiasImgs
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'noticia', 'categoria', 'data'], 'required'],
            [['noticia'], 'string'],
            [['categoria'], 'integer'],
            [['data'], 'safe'],
            [['titulo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'titulo' => Yii::t('app', 'Título'),
            'noticia' => Yii::t('app', 'Notícia'),
            'categoria' => Yii::t('app', 'Categoria'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticiasImgs()
    {
        return $this->hasMany(NoticiasImg::className(), ['noticia_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return NoticiasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoticiasQuery(get_called_class());
    }
}
