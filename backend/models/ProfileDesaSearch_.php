<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProfileDesa;

/**
 * ProfileDesaSearch represents the model behind the search form of `backend\models\ProfileDesa`.
 */
class ProfileDesaSearch extends ProfileDesa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kop_id', 'desa', 'kades', 'sekdes'], 'integer'],
            [['nama_kecamatan', 'nama_desa', 'alamat_', 'kode_pos', 'index_surat'], 'safe'],
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
        $query = ProfileDesa::find();

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
            'kop_id' => $this->kop_id,
            'desa' => Yii::$app->user->identity->desa,
            'kades' => $this->kades,
            'sekdes' => $this->sekdes,
        ]);

        $query->andFilterWhere(['like', 'nama_kecamatan', $this->nama_kecamatan])
            ->andFilterWhere(['like', 'nama_desa', $this->nama_desa])
            ->andFilterWhere(['like', 'alamat_', $this->alamat_])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'index_surat', $this->index_surat]);

        return $dataProvider;
    }
}
