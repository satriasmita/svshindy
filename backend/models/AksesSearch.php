<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Akses;

/**
 * AksesSearch represents the model behind the search form of `backend\models\Akses`.
 */
class AksesSearch extends Akses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['akses_id'], 'integer'],
            [['akses_destinasi', 'akses_transportasi', 'akses_distance'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Akses::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'akses_id' => $this->akses_id,
        ]);

        $query->andFilterWhere(['like', 'akses_destinasi', $this->akses_destinasi])
            ->andFilterWhere(['like', 'akses_transportasi', $this->akses_transportasi])
            ->andFilterWhere(['like', 'akses_distance', $this->akses_distance]);

        return $dataProvider;
    }
}
