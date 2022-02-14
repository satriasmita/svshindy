<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Agenda;

/**
 * AgendaSearch represents the model behind the search form of `backend\models\Agenda`.
 */
class AgendaSearch extends Agenda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agenda_id'], 'integer'],
            [['agenda_nama', 'agenda_isi', 'agenda_lokasi', 'agenda_mulai', 'agenda_selesai', 'agenda_photoid', 'agenda_latitude', 'agenda_longitude'], 'safe'],
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
        $query = Agenda::find();

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
            'agenda_id' => $this->agenda_id,
        ]);

        $query->andFilterWhere(['like', 'agenda_nama', $this->agenda_nama])
            ->andFilterWhere(['like', 'agenda_isi', $this->agenda_isi])
            ->andFilterWhere(['like', 'agenda_lokasi', $this->agenda_lokasi])
            ->andFilterWhere(['like', 'agenda_mulai', $this->agenda_mulai])
            ->andFilterWhere(['like', 'agenda_selesai', $this->agenda_selesai])
            ->andFilterWhere(['like', 'agenda_photoid', $this->agenda_photoid])
            ->andFilterWhere(['like', 'agenda_latitude', $this->agenda_latitude])
            ->andFilterWhere(['like', 'agenda_longitude', $this->agenda_longitude]);

        return $dataProvider;
    }
}
