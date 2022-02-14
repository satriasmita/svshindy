<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KategoriKamar;

/**
 * KategoriKamarSearch represents the model behind the search form of `frontend\models\KategoriKamar`.
 */
class KategoriKamarSearch extends KategoriKamar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kamar'], 'integer'],
            [['nama_kamaar'], 'safe'],
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
        $query = KategoriKamar::find();

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
            'id_kamar' => $this->id_kamar,
        ]);

        $query->andFilterWhere(['like', 'nama_kamaar', $this->nama_kamaar]);

        return $dataProvider;
    }
}
