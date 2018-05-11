<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogos".
 *
 * @property int $codigo
 * @property string $categoria
 * @property int $rodada
 * @property string $data_jogo
 * @property string $dia
 * @property string $hora
 * @property string $placar1
 * @property string $placar2
 * @property string $equipe1
 * @property int $id1
 * @property string $equipe2
 * @property int $id2
 * @property string $campo
 * @property string $fase
 * @property int $njg
 * @property string $wo
 * @property string $wo2
 * @property string $sema
 * @property int $campeonato
 * @property string $confirmacao_rodada
 * @property string $tempojg
 * @property string $destaque
 * @property int $PLpenalt1
 * @property int $PLpenalt2
 */
class Jogos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jogos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'campeonato', 'tempojg'], 'required'],
            [['codigo', 'rodada', 'id1', 'id2', 'njg', 'campeonato', 'PLpenalt1', 'PLpenalt2'], 'integer'],
            [['data_jogo'], 'safe'],
            [['tempojg'], 'string'],
            [['categoria', 'dia', 'hora', 'equipe1', 'equipe2', 'campo', 'fase', 'wo', 'wo2', 'sema'], 'string', 'max' => 255],
            [['placar1', 'placar2'], 'string', 'max' => 11],
            [['confirmacao_rodada'], 'string', 'max' => 20],
            [['destaque'], 'string', 'max' => 3],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => Yii::t('app', 'Código'),
            'categoria' => Yii::t('app', 'Categoria'),
            'rodada' => Yii::t('app', 'Rodada'),
            'data_jogo' => Yii::t('app', 'Data Jogo'),
            'dia' => Yii::t('app', 'Dia'),
            'hora' => Yii::t('app', 'Hora'),
            'placar1' => Yii::t('app', 'Placar1'),
            'placar2' => Yii::t('app', 'Placar2'),
            'equipe1' => Yii::t('app', 'Equipe1'),
            'id1' => Yii::t('app', 'Id1'),
            'equipe2' => Yii::t('app', 'Equipe2'),
            'id2' => Yii::t('app', 'Id2'),
            'campo' => Yii::t('app', 'Campo'),
            'fase' => Yii::t('app', 'Fase'),
            'njg' => Yii::t('app', 'Njg'),
            'wo' => Yii::t('app', 'Wo'),
            'wo2' => Yii::t('app', 'Wo2'),
            'sema' => Yii::t('app', 'Sema'),
            'campeonato' => Yii::t('app', 'Campeonato'),
            'confirmacao_rodada' => Yii::t('app', 'Confirmacao Rodada'),
            'tempojg' => Yii::t('app', 'Tempojg'),
            'destaque' => Yii::t('app', 'Destaque'),
            'PLpenalt1' => Yii::t('app', 'Plpenalt1'),
            'PLpenalt2' => Yii::t('app', 'Plpenalt2'),
        ];
    }

    /**
     * @inheritdoc
     * @return JogosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JogosQuery(get_called_class());
    }
}
