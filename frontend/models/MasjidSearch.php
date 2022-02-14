<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Masjid;

/**
 * MasjidSearch represents the model behind the search form of `frontend\models\Masjid`.
 */
class MasjidSearch extends Masjid
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_id', 'tahun', 'status'], 'integer'],
            [['m_nama', 'm_alamat', 'm_latitude', 'm_longitude'], 'safe'],
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
        $query = Masjid::find();

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
            'm_id' => $this->m_id,
            'tahun' => $this->tahun,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'm_nama', $this->m_nama])
            ->andFilterWhere(['like', 'm_alamat', $this->m_alamat])
            ->andFilterWhere(['like', 'm_latitude', $this->m_latitude])
            ->andFilterWhere(['like', 'm_longitude', $this->m_longitude]);

        return $dataProvider;
    }
}
