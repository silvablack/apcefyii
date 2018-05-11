<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "julgamento".
 *
 * @property int $id
 * @property string $numero_processo
 * @property int $jogo
 * @property string $data
 * @property string $nome_jogador
 * @property string $equipe
 * @property string $categoria
 * @property string $data_analise
 * @property string $horario
 * @property string $ocorrencia
 * @property string $convocado
 * @property int $id_competicao
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
            [['id', 'numero_processo', 'jogo', 'data', 'nome_jogador', 'equipe', 'categoria', 'data_analise', 'horario', 'ocorrencia', 'convocado', 'id_competicao'], 'required'],
            [['id', 'jogo', 'id_competicao'], 'integer'],
            [['data', 'data_analise'], 'safe'],
            [['numero_processo', 'nome_jogador', 'equipe', 'categoria', 'horario', 'ocorrencia', 'convocado'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'numero_processo' => Yii::t('app', 'Número Processo'),
            'jogo' => Yii::t('app', 'Jogo'),
            'data' => Yii::t('app', 'Data'),
            'nome_jogador' => Yii::t('app', 'Nome Jogador'),
            'equipe' => Yii::t('app', 'Equipe'),
            'categoria' => Yii::t('app', 'Categoria'),
            'data_analise' => Yii::t('app', 'Data Análise'),
            'horario' => Yii::t('app', 'Horário'),
            'ocorrencia' => Yii::t('app', 'Ocorrência'),
            'convocado' => Yii::t('app', 'Convocado'),
            'id_competicao' => Yii::t('app', 'Id Competicao'),
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
