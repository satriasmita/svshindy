<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FasilitasKamarHotel;

/**
 * FasilitasKamarHotelSearch represents the model behind the search form of `backend\models\FasilitasKamarHotel`.
 */
class FasilitasKamarHotelSearch extends FasilitasKamarHotel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fkh_id', 'kh_id', 'fkh_balkon', 'fkh_coffe_maker', 'fkh_ac', 'fkh_hot_water', 'fkh_wifi', 'fkh_sarapan', 'fkh_shower', 'fkh_tv', 'fkh_kulkas'], 'integer'],
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
        $query = FasilitasKamarHotel::find();

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
            'fkh_id' => $this->fkh_id,
            'kh_id' => $this->kh_id,
            'fkh_balkon' => $this->fkh_balkon,
            'fkh_coffe_maker' => $this->fkh_coffe_maker,
            'fkh_ac' => $this->fkh_ac,
            'fkh_hot_water' => $this->fkh_hot_water,
            'fkh_wifi' => $this->fkh_wifi,
            'fkh_sarapan' => $this->fkh_sarapan,
            'fkh_shower' => $this->fkh_shower,
            'fkh_tv' => $this->fkh_tv,
            'fkh_kulkas' => $this->fkh_kulkas,
        ]);

        return $dataProvider;
    }
}
