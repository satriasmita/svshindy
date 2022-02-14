<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Hotel;

/**
 * HotelSearch represents the model behind the search form of `frontend\models\Hotel`.
 */
class HotelSearch extends Hotel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hotel_id', 'tahun', 'status'], 'integer'],
            [['h_nama', 'h_alamat', 'h_telp', 'foto', 'foto2', 'foto3', 'foto4', 'h_latitude', 'h_longitude'], 'safe'],
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
        $query = Hotel::find();

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
            'hotel_id' => $this->hotel_id,
            'tahun' => $this->tahun,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'h_nama', $this->h_nama])
            ->andFilterWhere(['like', 'h_alamat', $this->h_alamat])
            ->andFilterWhere(['like', 'h_telp', $this->h_telp])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'foto2', $this->foto2])
            ->andFilterWhere(['like', 'foto3', $this->foto3])
            ->andFilterWhere(['like', 'foto4', $this->foto4])
            ->andFilterWhere(['like', 'h_latitude', $this->h_latitude])
            ->andFilterWhere(['like', 'h_longitude', $this->h_longitude]);

        return $dataProvider;
    }
}
