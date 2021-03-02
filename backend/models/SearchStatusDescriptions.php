<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusDescriptions;

/**
 * SearchStatusDescriptions represents the model behind the search form of `app\models\StatusDescriptions`.
 */
class SearchStatusDescriptions extends StatusDescriptions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_id'], 'integer'],
            [['description', 'email_subj', 'email_header', 'lang_code'], 'safe'],
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
        $query = StatusDescriptions::find();

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
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'email_subj', $this->email_subj])
            ->andFilterWhere(['like', 'email_header', $this->email_header])
            ->andFilterWhere(['like', 'lang_code', $this->lang_code]);

        return $dataProvider;
    }
}
