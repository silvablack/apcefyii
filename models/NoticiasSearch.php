<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Noticias;

/**
 * NoticiasSearch represents the model behind the search form of `app\models\Noticias`.
 */
class NoticiasSearch extends Noticias
{
    public $categoria;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['titulo', 'noticia', 'data','categoria'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Noticias::find();
        $query->joinWith(['categoria0']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['categoria'] = [
            'asc'=>['categoria.categoria'=>SORT_ASC],
            'desc'=>['categoria.categoria'=>SORT_DESC]
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'categoria' => $this->categoria,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'noticia', $this->noticia])
            ->andFilterWhere(['like','categoria.categoria',$this->categoria]);

        $query->orderBy('data DESC');

        return $dataProvider;
    }
}
