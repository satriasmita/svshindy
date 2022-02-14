<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kerajinan;

/**
 * KerajinanSearch represents the model behind the search form of `frontend\models\Kerajinan`.
 */
class KerajinanSearch extends Kerajinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kerajinan_id', 'tahun', 'status'], 'integer'],
            [['kerajinan_jenis', 'kerajinan_usaha', 'kerajinan_pemilik', 'kerajinan_alamat', 'kerajinan_telepon', 'kerajinan_keterangan'], 'safe'],
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
        $query = Kerajinan::find();

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
            'kerajinan_id' => $this->kerajinan_id,
            'tahun' => $this->tahun,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kerajinan_jenis', $this->kerajinan_jenis])
            ->andFilterWhere(['like', 'kerajinan_usaha', $this->kerajinan_usaha])
            ->andFilterWhere(['like', 'kerajinan_pemilik', $this->kerajinan_pemilik])
            ->andFilterWhere(['like', 'kerajinan_alamat', $this->kerajinan_alamat])
            ->andFilterWhere(['like', 'kerajinan_telepon', $this->kerajinan_telepon])
            ->andFilterWhere(['like', 'kerajinan_keterangan', $this->kerajinan_keterangan]);

        return $dataProvider;
    }
}
