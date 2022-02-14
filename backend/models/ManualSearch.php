<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Manual;

/**
 * ManualSearch represents the model behind the search form of `backend\models\Manual`.
 */
class ManualSearch extends Manual
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manual_id'], 'integer'],
            [['manual_title', 'manual_file'], 'safe'],
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
        $query = Manual::find();

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
            'manual_id' => $this->manual_id,
        ]);

        $query->andFilterWhere(['like', 'manual_title', $this->manual_title])
            ->andFilterWhere(['like', 'manual_file', $this->manual_file]);

        return $dataProvider;
    }
}
