<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_julgamento".
 *
 * @property int $id
 * @property string $data
 */
class InfoJulgamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_julgamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'required'],
            [['data'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return InfoJulgamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InfoJulgamentoQuery(get_called_class());
    }
}
