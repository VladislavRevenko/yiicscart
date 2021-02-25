<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shipments;

/**
 * SearchShipments represents the model behind the search form of `app\models\Shipments`.
 */
class SearchShipments extends Shipments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipment_id', 'shipping_id', 'timestamp'], 'integer'],
            [['tracking_number', 'carrier', 'comments', 'status'], 'safe'],
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
        $query = Shipments::find();

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
            'shipment_id' => $this->shipment_id,
            'shipping_id' => $this->shipping_id,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'tracking_number', $this->tracking_number])
            ->andFilterWhere(['like', 'carrier', $this->carrier])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
