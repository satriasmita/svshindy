<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Spbu;

/**
 * SpbuSearch represents the model behind the search form of `frontend\models\Spbu`.
 */
class SpbuSearch extends Spbu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spbu_id', 'tahun', 'status'], 'integer'],
            [['spbu_nama', 'spbu_alamat', 'spbu_latitude', 'spbu_longitude'], 'safe'],
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
        $query = Spbu::find();

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
            'spbu_id' => $this->spbu_id,
            'tahun' => $this->tahun,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'spbu_nama', $this->spbu_nama])
            ->andFilterWhere(['like', 'spbu_alamat', $this->spbu_alamat])
            ->andFilterWhere(['like', 'spbu_latitude', $this->spbu_latitude])
            ->andFilterWhere(['like', 'spbu_longitude', $this->spbu_longitude]);

        return $dataProvider;
    }
}
