<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * SearchOrders represents the model behind the search form of `app\models\Orders`.
 */
class SearchOrders extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'parent_order_id', 'company_id', 'issuer_id', 'user_id', 'timestamp', 'payment_id', 'repaid', 'localization_id', 'profile_id', 'storefront_id', 'sd_bonus_loyalty_id'], 'integer'],
            [['is_parent_order', 'shipping_ids', 'status', 'notes', 'details', 'promotions', 'promotion_ids', 'firstname', 'lastname', 'company', 'b_firstname', 'b_lastname', 'b_address', 'b_address_2', 'b_city', 'b_county', 'b_state', 'b_country', 'b_zipcode', 'b_phone', 's_firstname', 's_lastname', 's_address', 's_address_2', 's_city', 's_county', 's_state', 's_country', 's_zipcode', 's_phone', 's_address_type', 'phone', 'fax', 'url', 'email', 'tax_exempt', 'lang_code', 'ip_address', 'validation_code', 'sd_bonus_loyalty'], 'safe'],
            [['total', 'subtotal', 'discount', 'subtotal_discount', 'payment_surcharge', 'shipping_cost'], 'number'],
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
        $query = Orders::find();

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
            'order_id' => $this->order_id,
            'parent_order_id' => $this->parent_order_id,
            'company_id' => $this->company_id,
            'issuer_id' => $this->issuer_id,
            'user_id' => $this->user_id,
            'total' => $this->total,
            'subtotal' => $this->subtotal,
            'discount' => $this->discount,
            'subtotal_discount' => $this->subtotal_discount,
            'payment_surcharge' => $this->payment_surcharge,
            'shipping_cost' => $this->shipping_cost,
            'timestamp' => $this->timestamp,
            'payment_id' => $this->payment_id,
            'repaid' => $this->repaid,
            'localization_id' => $this->localization_id,
            'profile_id' => $this->profile_id,
            'storefront_id' => $this->storefront_id,
            'sd_bonus_loyalty_id' => $this->sd_bonus_loyalty_id,
        ]);

        $query->andFilterWhere(['like', 'is_parent_order', $this->is_parent_order])
            ->andFilterWhere(['like', 'shipping_ids', $this->shipping_ids])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'promotions', $this->promotions])
            ->andFilterWhere(['like', 'promotion_ids', $this->promotion_ids])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'b_firstname', $this->b_firstname])
            ->andFilterWhere(['like', 'b_lastname', $this->b_lastname])
            ->andFilterWhere(['like', 'b_address', $this->b_address])
            ->andFilterWhere(['like', 'b_address_2', $this->b_address_2])
            ->andFilterWhere(['like', 'b_city', $this->b_city])
            ->andFilterWhere(['like', 'b_county', $this->b_county])
            ->andFilterWhere(['like', 'b_state', $this->b_state])
            ->andFilterWhere(['like', 'b_country', $this->b_country])
            ->andFilterWhere(['like', 'b_zipcode', $this->b_zipcode])
            ->andFilterWhere(['like', 'b_phone', $this->b_phone])
            ->andFilterWhere(['like', 's_firstname', $this->s_firstname])
            ->andFilterWhere(['like', 's_lastname', $this->s_lastname])
            ->andFilterWhere(['like', 's_address', $this->s_address])
            ->andFilterWhere(['like', 's_address_2', $this->s_address_2])
            ->andFilterWhere(['like', 's_city', $this->s_city])
            ->andFilterWhere(['like', 's_county', $this->s_county])
            ->andFilterWhere(['like', 's_state', $this->s_state])
            ->andFilterWhere(['like', 's_country', $this->s_country])
            ->andFilterWhere(['like', 's_zipcode', $this->s_zipcode])
            ->andFilterWhere(['like', 's_phone', $this->s_phone])
            ->andFilterWhere(['like', 's_address_type', $this->s_address_type])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tax_exempt', $this->tax_exempt])
            ->andFilterWhere(['like', 'lang_code', $this->lang_code])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'validation_code', $this->validation_code])
            ->andFilterWhere(['like', 'sd_bonus_loyalty', $this->sd_bonus_loyalty]);

        return $dataProvider;
    }
}
