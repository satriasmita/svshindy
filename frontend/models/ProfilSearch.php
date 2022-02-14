<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Profil;

/**
 * ProfilSearch represents the model behind the search form of `frontend\models\Profil`.
 */
class ProfilSearch extends Profil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prof_id', 'prof_status'], 'integer'],
            [['prof_judul', 'prof_gambar', 'prof_isi', 'slug'], 'safe'],
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
        $query = Profil::find();

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
            'prof_id' => $this->prof_id,
            'prof_status' => $this->prof_status,
        ]);

        $query->andFilterWhere(['like', 'prof_judul', $this->prof_judul])
            ->andFilterWhere(['like', 'prof_gambar', $this->prof_gambar])
            ->andFilterWhere(['like', 'prof_isi', $this->prof_isi])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
