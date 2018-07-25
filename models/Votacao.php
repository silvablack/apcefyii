<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "votacao".
 *
 * @property int $id
 * @property string $opcao
 * @property string $ip
 */
class Votacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'votacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opcao', 'ip'], 'required'],
            [['opcao', 'ip'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'opcao' => Yii::t('app', 'Opcao'),
            'ip' => Yii::t('app', 'Ip'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return VotacaoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VotacaoQuery(get_called_class());
    }
}
