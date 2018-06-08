<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "julgamento".
 *
 * @property int $id_codigo
 * @property string $atleta
 * @property string $equipe
 * @property int $jogo
 * @property string $data
 * @property string $processo
 * @property string $relato
 * @property string $datajulgamento
 * @property string $horario
 * @property string $categoria
 * @property string $artigo
 * @property string $pena
 * @property string $resultado
 */
class Julgamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'julgamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['atleta', 'equipe', 'jogo', 'data', 'processo', 'relato', 'datajulgamento', 'horario', 'categoria', 'artigo', 'pena', 'resultado'], 'required'],
            [['jogo'], 'integer'],
            [['data', 'datajulgamento'], 'safe'],
            [['relato'], 'string'],
            [['atleta', 'equipe'], 'string', 'max' => 80],
            [['processo', 'resultado'], 'string', 'max' => 10],
            [['horario'], 'string', 'max' => 5],
            [['categoria'], 'string', 'max' => 60],
            [['artigo', 'pena'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_codigo' => Yii::t('app', 'Id Codigo'),
            'atleta' => Yii::t('app', 'Atleta'),
            'equipe' => Yii::t('app', 'Equipe'),
            'jogo' => Yii::t('app', 'Jogo'),
            'data' => Yii::t('app', 'Data'),
            'processo' => Yii::t('app', 'Processo'),
            'relato' => Yii::t('app', 'Relato'),
            'datajulgamento' => Yii::t('app', 'Datajulgamento'),
            'horario' => Yii::t('app', 'Horario'),
            'categoria' => Yii::t('app', 'Categoria'),
            'artigo' => Yii::t('app', 'Artigo'),
            'pena' => Yii::t('app', 'Pena'),
            'resultado' => Yii::t('app', 'Resultado'),
        ];
    }

    /**
     * @inheritdoc
     * @return JulgamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JulgamentoQuery(get_called_class());
    }
}
