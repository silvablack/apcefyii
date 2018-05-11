<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias_img".
 *
 * @property int $id
 * @property int $noticia_id
 * @property string $src
 *
 * @property Noticias $noticia
 */
class NoticiasImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticias_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noticia_id', 'src'], 'required'],
            [['noticia_id'], 'integer'],
            [['src'], 'string', 'max' => 200],
            [['noticia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Noticias::className(), 'targetAttribute' => ['noticia_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'noticia_id' => Yii::t('app', 'Notícia ID'),
            'src' => Yii::t('app', 'Src'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticia()
    {
        return $this->hasOne(Noticias::className(), ['id' => 'noticia_id']);
    }

    /**
     * @inheritdoc
     * @return NoticiasImgQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoticiasImgQuery(get_called_class());
    }
}
