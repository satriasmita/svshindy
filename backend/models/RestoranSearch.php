<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Restoran;

/**
 * RestoranSearch represents the model behind the search form of `backend\models\Restoran`.
 */
class RestoranSearch extends Restoran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['restoran_id'], 'integer'],
            [['restoran_nama', 'restoran_alamat', 'restoran_telepon', 'restoran_detail', 'restoran_photo', 'restoran_pemilik', 'restoran_latitude', 'restoran_longitude'], 'safe'],
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
        $query = Restoran::find();

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
            'restoran_id' => $this->restoran_id,
        ]);

        $query->andFilterWhere(['like', 'restoran_nama', $this->restoran_nama])
            ->andFilterWhere(['like', 'restoran_alamat', $this->restoran_alamat])
            ->andFilterWhere(['like', 'restoran_telepon', $this->restoran_telepon])
            ->andFilterWhere(['like', 'restoran_detail', $this->restoran_detail])
            ->andFilterWhere(['like', 'restoran_photo', $this->restoran_photo])
            ->andFilterWhere(['like', 'restoran_pemilik', $this->restoran_pemilik])
            ->andFilterWhere(['like', 'restoran_latitude', $this->restoran_latitude])
            ->andFilterWhere(['like', 'restoran_longitude', $this->restoran_longitude]);

        return $dataProvider;
    }
}
