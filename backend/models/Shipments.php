<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shipments".
 *
 * @property int $shipment_id
 * @property int $shipping_id
 * @property string $tracking_number
 * @property string $carrier
 * @property int $timestamp
 * @property string|null $comments
 * @property string $status
 */
class Shipments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_shipments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipping_id', 'timestamp'], 'integer'],
            [['comments'], 'string'],
            [['tracking_number', 'carrier'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shipment_id' => 'Shipment ID',
            'shipping_id' => 'Shipping ID',
            'tracking_number' => 'Tracking Number',
            'carrier' => 'Carrier',
            'timestamp' => 'Timestamp',
            'comments' => 'Comments',
            'status' => 'Status',
        ];
    }
}
