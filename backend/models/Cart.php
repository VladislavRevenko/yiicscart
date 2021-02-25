<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cscart_user_session_products".
 *
 * @property int $user_id
 * @property int $timestamp
 * @property string $type
 * @property string $user_type
 * @property int $item_id
 * @property string $item_type
 * @property int $product_id
 * @property int $amount
 * @property float $price
 * @property resource|null $extra
 * @property string $session_id
 * @property resource $ip_address
 * @property int $order_id
 * @property int $storefront_id
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_user_session_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'type', 'user_type', 'item_id'], 'required'],
            [['user_id', 'timestamp', 'item_id', 'product_id', 'amount', 'order_id', 'storefront_id'], 'integer'],
            [['price'], 'number'],
            [['extra'], 'string'],
            [['type', 'user_type', 'item_type'], 'string', 'max' => 1],
            [['session_id'], 'string', 'max' => 64],
            [['ip_address'], 'string', 'max' => 40],
            [['user_id', 'type', 'user_type', 'item_id'], 'unique', 'targetAttribute' => ['user_id', 'type', 'user_type', 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'timestamp' => 'Timestamp',
            'type' => 'Type',
            'user_type' => 'User Type',
            'item_id' => 'Item ID',
            'item_type' => 'Item Type',
            'product_id' => 'Product ID',
            'amount' => 'Amount',
            'price' => 'Price',
            'extra' => 'Extra',
            'session_id' => 'Session ID',
            'ip_address' => 'Ip Address',
            'order_id' => 'Order ID',
            'storefront_id' => 'Storefront ID',
        ];
    }
}
