<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DestinasiWisata;

/**
 * DestinasiWisataSearch represents the model behind the search form of `frontend\models\DestinasiWisata`.
 */
class DestinasiWisataSearch extends DestinasiWisata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_destinasi', 'tahun', 'status'], 'integer'],
            [['nama_destinasi', 'detail', 'alamat', 'latitude', 'longitude', 'foto', 'foto2', 'foto3', 'foto4'], 'safe'],
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
        $query = DestinasiWisata::find();

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
            'id_destinasi' => $this->id_destinasi,
            'tahun' => $this->tahun,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nama_destinasi', $this->nama_destinasi])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'foto2', $this->foto2])
            ->andFilterWhere(['like', 'foto3', $this->foto3])
            ->andFilterWhere(['like', 'foto4', $this->foto4]);

        return $dataProvider;
    }
}
