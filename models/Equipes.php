<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipes".
 *
 * @property string $equipe
 * @property string $categoria
 * @property int $id
 * @property int $V
 * @property int $D
 * @property int $E
 * @property int $GP
 * @property int $GC
 * @property int $SG
 * @property int $part
 * @property int $PTS
 * @property int $class
 * @property int $porcentagem
 * @property string $legenda
 * @property int $wo
 * @property int $qtdAmarelo
 * @property int $qtdVermelho
 * @property int $ptAmarelo
 * @property int $ptVermelho
 * @property int $pontuacaoCartoes
 * @property int $classificacao_disciplinar
 * @property int $id_competicao
 * @property string $chave
 * @property int $pp
 * @property int $pg
 * @property string $representante1
 * @property string $representante2
 * @property string $email_rp1
 * @property string $email_rp2
 * @property string $fone_rp1
 * @property string $fone_rp2
 * @property string $tecnico
 * @property string $auxiliartecnico
 * @property string $rebaixamento
 */
class Equipes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['equipe', 'id', 'id_competicao', 'rebaixamento'], 'required'],
            [['id', 'V', 'D', 'E', 'GP', 'GC', 'SG', 'part', 'PTS', 'class', 'porcentagem', 'wo', 'qtdAmarelo', 'qtdVermelho', 'ptAmarelo', 'ptVermelho', 'pontuacaoCartoes', 'classificacao_disciplinar', 'id_competicao', 'pp', 'pg'], 'integer'],
            [['legenda'], 'string'],
            [['equipe', 'categoria'], 'string', 'max' => 255],
            [['chave'], 'string', 'max' => 2],
            [['representante1', 'representante2', 'email_rp1', 'email_rp2', 'fone_rp1', 'fone_rp2', 'tecnico'], 'string', 'max' => 100],
            [['auxiliartecnico'], 'string', 'max' => 50],
            [['rebaixamento'], 'string', 'max' => 3],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'equipe' => Yii::t('app', 'Equipe'),
            'categoria' => Yii::t('app', 'Categoria'),
            'id' => Yii::t('app', 'ID'),
            'V' => Yii::t('app', 'V'),
            'D' => Yii::t('app', 'D'),
            'E' => Yii::t('app', 'E'),
            'GP' => Yii::t('app', 'GP'),
            'GC' => Yii::t('app', 'GC'),
            'SG' => Yii::t('app', 'SG'),
            'part' => Yii::t('app', 'Part'),
            'PTS' => Yii::t('app', 'Pts'),
            'class' => Yii::t('app', 'Class'),
            'porcentagem' => Yii::t('app', 'Porcentagem'),
            'legenda' => Yii::t('app', 'Legenda'),
            'wo' => Yii::t('app', 'Wo'),
            'qtdAmarelo' => Yii::t('app', 'Qtd Amarelo'),
            'qtdVermelho' => Yii::t('app', 'Qtd Vermelho'),
            'ptAmarelo' => Yii::t('app', 'Pt Amarelo'),
            'ptVermelho' => Yii::t('app', 'Pt Vermelho'),
            'pontuacaoCartoes' => Yii::t('app', 'Pontuação Cartões'),
            'classificacao_disciplinar' => Yii::t('app', 'Classificação Disciplinar'),
            'id_competicao' => Yii::t('app', 'ID Competição'),
            'chave' => Yii::t('app', 'Chave'),
            'pp' => Yii::t('app', 'Pp'),
            'pg' => Yii::t('app', 'Pg'),
            'representante1' => Yii::t('app', 'Representante1'),
            'representante2' => Yii::t('app', 'Representante2'),
            'email_rp1' => Yii::t('app', 'Email Rp1'),
            'email_rp2' => Yii::t('app', 'Email Rp2'),
            'fone_rp1' => Yii::t('app', 'Fone Rp1'),
            'fone_rp2' => Yii::t('app', 'Fone Rp2'),
            'tecnico' => Yii::t('app', 'Técnico'),
            'auxiliartecnico' => Yii::t('app', 'Auxiliar Técnico'),
            'rebaixamento' => Yii::t('app', 'Rebaixamento'),
        ];
    }

    /**
     * @inheritdoc
     * @return EquipesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EquipesQuery(get_called_class());
    }
}
