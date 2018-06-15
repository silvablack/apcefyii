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
 * @property string $analise
 * @property string $resultado
 * @property string $pena
 * @property string $artigo
 */
class Julgamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'julgamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'numero_processo', 'jogo', 'data', 'nome_jogador', 'equipe', 'categoria', 'data_analise', 'horario', 'ocorrencia', 'convocado', 'id_competicao', 'analise', 'resultado', 'pena', 'artigo'], 'required'],
            [['id', 'jogo', 'id_competicao'], 'integer'],
            [['data', 'data_analise'], 'safe'],
            [['analise', 'resultado'], 'string'],
            [['numero_processo', 'nome_jogador', 'equipe', 'categoria', 'horario', 'ocorrencia', 'convocado'], 'string', 'max' => 255],
            [['pena'], 'string', 'max' => 200],
            [['artigo'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'numero_processo' => Yii::t('app', 'Numero Processo'),
            'jogo' => Yii::t('app', 'Jogo'),
            'data' => Yii::t('app', 'Data'),
            'nome_jogador' => Yii::t('app', 'Nome Jogador'),
            'equipe' => Yii::t('app', 'Equipe'),
            'categoria' => Yii::t('app', 'Categoria'),
            'data_analise' => Yii::t('app', 'Data Analise'),
            'horario' => Yii::t('app', 'Horario'),
            'ocorrencia' => Yii::t('app', 'Ocorrencia'),
            'convocado' => Yii::t('app', 'Convocado'),
            'id_competicao' => Yii::t('app', 'Id Competicao'),
            'analise' => Yii::t('app', 'Analise'),
            'resultado' => Yii::t('app', 'Resultado'),
            'pena' => Yii::t('app', 'Pena'),
            'artigo' => Yii::t('app', 'Artigo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return JulgamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JulgamentoQuery(get_called_class());
    }
}
