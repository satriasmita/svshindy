<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `backend\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pemesanan_id', 'pemesanan_hotel_id', 'pemesanan_tamu_dewasa', 'pemesanan_tamu_anak', 'pemesanan_jumlah_kamar', 'pemesanan_status'], 'integer'],
            [['pemesanan_checkin', 'pemesanan_durasi', 'pemesanan_nama', 'pemesanan_notelp', 'pemesanan_email'], 'safe'],
            [['pemesanan_total'], 'number'],
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
        $query = Pemesanan::find();

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
            'pemesanan_id' => $this->pemesanan_id,
            'pemesanan_hotel_id' => $this->pemesanan_hotel_id,
            'pemesanan_checkin' => $this->pemesanan_checkin,
            'pemesanan_tamu_dewasa' => $this->pemesanan_tamu_dewasa,
            'pemesanan_tamu_anak' => $this->pemesanan_tamu_anak,
            'pemesanan_jumlah_kamar' => $this->pemesanan_jumlah_kamar,
            'pemesanan_total' => $this->pemesanan_total,
            'pemesanan_status' => $this->pemesanan_status,
        ]);

        $query->andFilterWhere(['like', 'pemesanan_durasi', $this->pemesanan_durasi])
            ->andFilterWhere(['like', 'pemesanan_nama', $this->pemesanan_nama])
            ->andFilterWhere(['like', 'pemesanan_notelp', $this->pemesanan_notelp])
            ->andFilterWhere(['like', 'pemesanan_email', $this->pemesanan_email]);

        return $dataProvider;
    }
}
