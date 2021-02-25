<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cart;

/**
 * SearchCart represents the model behind the search form of `app\models\Cart`.
 */
class SearchCart extends Cart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'timestamp', 'item_id', 'product_id', 'amount', 'order_id', 'storefront_id'], 'integer'],
            [['type', 'user_type', 'item_type', 'extra', 'session_id', 'ip_address'], 'safe'],
            [['price'], 'number'],
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
        $query = Cart::find();

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
            'user_id' => $this->user_id,
            'timestamp' => $this->timestamp,
            'item_id' => $this->item_id,
            'product_id' => $this->product_id,
            'amount' => $this->amount,
            'price' => $this->price,
            'order_id' => $this->order_id,
            'storefront_id' => $this->storefront_id,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'user_type', $this->user_type])
            ->andFilterWhere(['like', 'item_type', $this->item_type])
            ->andFilterWhere(['like', 'extra', $this->extra])
            ->andFilterWhere(['like', 'session_id', $this->session_id])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
