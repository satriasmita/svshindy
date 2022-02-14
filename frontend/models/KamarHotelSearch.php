<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KamarHotel;

/**
 * KamarHotelSearch represents the model behind the search form of `frontend\models\KamarHotel`.
 */
class KamarHotelSearch extends KamarHotel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kh_id', 'kh_hotel', 'kh_harga', 'kh_sisa_kamar', 'kh_jumlah_tamu'], 'integer'],
            [['kh_nama', 'kh_luas_kamar', 'kh_jenis_bed'], 'safe'],
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
        $query = KamarHotel::find();

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
            'kh_id' => $this->kh_id,
            'kh_hotel' => $this->kh_hotel,
            'kh_harga' => $this->kh_harga,
            'kh_sisa_kamar' => $this->kh_sisa_kamar,
            'kh_jumlah_tamu' => $this->kh_jumlah_tamu,
        ]);

        $query->andFilterWhere(['like', 'kh_nama', $this->kh_nama])
            ->andFilterWhere(['like', 'kh_luas_kamar', $this->kh_luas_kamar])
            ->andFilterWhere(['like', 'kh_jenis_bed', $this->kh_jenis_bed]);

        return $dataProvider;
    }
}
