<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FasilitasHotel;

/**
 * FasilitasHotelSearch represents the model behind the search form of `backend\models\FasilitasHotel`.
 */
class FasilitasHotelSearch extends FasilitasHotel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fh_id', 'fh_hotel', 'fh_ac', 'fh_kolam_renang', 'fh_tempat_parkir', 'fh_wifi', 'fh_restorant', 'fh_resepsionis'], 'integer'],
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
        $query = FasilitasHotel::find();

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
            'fh_id' => $this->fh_id,
            'fh_hotel' => $this->fh_hotel,
            'fh_ac' => $this->fh_ac,
            'fh_kolam_renang' => $this->fh_kolam_renang,
            'fh_tempat_parkir' => $this->fh_tempat_parkir,
            'fh_wifi' => $this->fh_wifi,
            'fh_restorant' => $this->fh_restorant,
            'fh_resepsionis' => $this->fh_resepsionis,
        ]);

        return $dataProvider;
    }
}
