<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Parkir;

/**
 * ParkirSearch represents the model behind the search form of `frontend\models\Parkir`.
 */
class ParkirSearch extends Parkir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_id'], 'integer'],
            [['p_nama', 'p_alamat', 'p_latitude', 'p_longitude'], 'safe'],
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
        $query = Parkir::find();

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
            'p_id' => $this->p_id,
        ]);

        $query->andFilterWhere(['like', 'p_nama', $this->p_nama])
            ->andFilterWhere(['like', 'p_alamat', $this->p_alamat])
            ->andFilterWhere(['like', 'p_latitude', $this->p_latitude])
            ->andFilterWhere(['like', 'p_longitude', $this->p_longitude]);

        return $dataProvider;
    }
}
