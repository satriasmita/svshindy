<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rs;

/**
 * RsSearch represents the model behind the search form of `backend\models\Rs`.
 */
class RsSearch extends Rs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rs_id','rs_status'], 'integer'],
            [['rs_nama', 'rs_alamat', 'rs_latitude', 'rs_longitude'], 'safe'],
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
        $query = Rs::find();

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
            'rs_id' => $this->rs_id,
        ]);

        $query->andFilterWhere(['like', 'rs_nama', $this->rs_nama])
            ->andFilterWhere(['like', 'rs_alamat', $this->rs_alamat])
            ->andFilterWhere(['like', 'rs_latitude', $this->rs_latitude])
            ->andFilterWhere(['like', 'rs_longitude', $this->rs_longitude]);

        return $dataProvider;
    }
}
