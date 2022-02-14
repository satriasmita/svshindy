<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Login;

/**
 * LoginSearch represents the model behind the search form of `backend\models\Login`.
 */
class LoginSearch extends Login
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login_id', 'id_user', 'id_KAB', 'id_KEC'], 'integer'],
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
        $query = Login::find();

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
            'login_id' => $this->login_id,
            'id_user' => $this->id_user,
            'id_KAB' => $this->id_KAB,
            'id_KEC' => $this->id_KEC,
        ]);

        return $dataProvider;
    }
}
