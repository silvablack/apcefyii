<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogadores".
 *
 * @property string $matricula
 * @property string $nome_jogador
 * @property string $time
 * @property string $categoria
 * @property int $gols
 * @property int $amarelo
 * @property int $vermelho
 * @property string $cartao
 * @property string $jgd
 * @property string $situacao_atleta
 * @property string $sumula
 * @property string $at
 * @property string $dtatestado
 * @property int $id_competicao
 * @property int $id
 * @property int $gol_contra
 * @property string $partidas
 * @property string $jogos_cumprir
 * @property string $data_cumprir
 * @property string $representante
 * @property string $tecnico
 * @property string $data_nascimento
 * @property string $debito
 * @property string $master
 * @property string $img
 * @property string $img_perfil
 */
class Jogadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jogadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'nome_jogador', 'time', 'categoria', 'id_competicao', 'data_nascimento'], 'required'],
            [['gols', 'amarelo', 'vermelho', 'id_competicao', 'gol_contra'], 'integer'],
            [['dtatestado', 'data_nascimento'], 'safe'],
            [['matricula', 'representante', 'tecnico'], 'string', 'max' => 50],
            [['nome_jogador', 'time', 'categoria', 'cartao', 'partidas', 'jogos_cumprir', 'data_cumprir', 'img_perfil'], 'string', 'max' => 100],
            [['jgd', 'debito', 'master'], 'string', 'max' => 3],
            [['situacao_atleta', 'sumula', 'at'], 'string', 'max' => 2],
            [['img'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'matricula' => Yii::t('app', 'Matricula'),
            'nome_jogador' => Yii::t('app', 'Nome Jogador'),
            'time' => Yii::t('app', 'Time'),
            'categoria' => Yii::t('app', 'Categoria'),
            'gols' => Yii::t('app', 'Gols'),
            'amarelo' => Yii::t('app', 'Amarelo'),
            'vermelho' => Yii::t('app', 'Vermelho'),
            'cartao' => Yii::t('app', 'Cartão'),
            'jgd' => Yii::t('app', 'Jgd'),
            'situacao_atleta' => Yii::t('app', 'Situação Atleta'),
            'sumula' => Yii::t('app', 'Súmula'),
            'at' => Yii::t('app', 'At'),
            'dtatestado' => Yii::t('app', 'Dt Atestado'),
            'id_competicao' => Yii::t('app', 'Id Competicao'),
            'id' => Yii::t('app', 'ID'),
            'gol_contra' => Yii::t('app', 'Gol Contra'),
            'partidas' => Yii::t('app', 'Partidas'),
            'jogos_cumprir' => Yii::t('app', 'Jogos Cumprir'),
            'data_cumprir' => Yii::t('app', 'Data Cumprir'),
            'representante' => Yii::t('app', 'Representante'),
            'tecnico' => Yii::t('app', 'Técnico'),
            'data_nascimento' => Yii::t('app', 'Data Nascimento'),
            'debito' => Yii::t('app', 'Débito'),
            'master' => Yii::t('app', 'Master'),
            'img' => Yii::t('app', 'Img'),
            'img_perfil' => Yii::t('app', 'Img Perfil'),
        ];
    }

    /**
     * @inheritdoc
     * @return JogadoresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JogadoresQuery(get_called_class());
    }
}
