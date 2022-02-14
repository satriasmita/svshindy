<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Atm;

/**
 * AtmSearch represents the model behind the search form of `backend\models\Atm`.
 */
class AtmSearch extends Atm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['atm_id','tahun','status'], 'integer'],
            [['atm_nama', 'atm_nama_bank', 'atm_alamat', 'atm_latitude', 'atm_longitude'], 'safe'],
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
        $query = Atm::find();

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
            'atm_id' => $this->atm_id,
        ]);

        $query->andFilterWhere(['like', 'atm_nama', $this->atm_nama])
            ->andFilterWhere(['like', 'atm_nama_bank', $this->atm_nama_bank])
            ->andFilterWhere(['like', 'atm_alamat', $this->atm_alamat])
            ->andFilterWhere(['like', 'atm_latitude', $this->atm_latitude])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'atm_longitude', $this->atm_longitude]);

        return $dataProvider;
    }
}
