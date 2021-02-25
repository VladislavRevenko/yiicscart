<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SalesReports;

/**
 * SearchSalesReports represents the model behind the search form of `app\models\SalesReports`.
 */
class SearchSalesReports extends SalesReports
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'position', 'time_from', 'time_to'], 'integer'],
            [['name', 'status', 'type', 'period'], 'safe'],
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
        $query = SalesReports::find();

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
            'report_id' => $this->report_id,
            'position' => $this->position,
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'period', $this->period]);

        return $dataProvider;
    }
}
