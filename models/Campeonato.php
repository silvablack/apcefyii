<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campeonato".
 *
 * @property int $id
 * @property string $nome
 * @property string $trofeu
 * @property string $periodo
 */
class Campeonato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campeonato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'trofeu', 'periodo'], 'required'],
            [['nome', 'trofeu', 'periodo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'trofeu' => Yii::t('app', 'Trofeu'),
            'periodo' => Yii::t('app', 'Periodo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return CampeonatoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampeonatoQuery(get_called_class());
    }
}
