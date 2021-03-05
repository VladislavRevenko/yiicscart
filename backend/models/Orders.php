<?php

namespace app\models;

use Yii;
use app\models\Statuses;
use app\models\StatusDescriptions;

/**
 * This is the model class for table "cscart_orders".
 *
 * @property int $order_id
 * @property string $is_parent_order
 * @property int $parent_order_id
 * @property int $company_id
 * @property int|null $issuer_id
 * @property int $user_id
 * @property float $total
 * @property float $subtotal
 * @property float $discount
 * @property float $subtotal_discount
 * @property float $payment_surcharge
 * @property string $shipping_ids
 * @property float $shipping_cost
 * @property int $timestamp
 * @property string $status
 * @property string|null $notes
 * @property string|null $details
 * @property string|null $promotions
 * @property string $promotion_ids
 * @property string $firstname
 * @property string $lastname
 * @property string $company
 * @property string $b_firstname
 * @property string $b_lastname
 * @property string $b_address
 * @property string $b_address_2
 * @property string $b_city
 * @property string $b_county
 * @property string $b_state
 * @property string $b_country
 * @property string $b_zipcode
 * @property string $b_phone
 * @property string $s_firstname
 * @property string $s_lastname
 * @property string $s_address
 * @property string $s_address_2
 * @property string $s_city
 * @property string $s_county
 * @property string $s_state
 * @property string $s_country
 * @property string $s_zipcode
 * @property string $s_phone
 * @property string $s_address_type
 * @property string $phone
 * @property string $fax
 * @property string $url
 * @property string $email
 * @property int $payment_id
 * @property string $tax_exempt
 * @property string $lang_code
 * @property resource $ip_address
 * @property int $repaid
 * @property string $validation_code
 * @property int $localization_id
 * @property int $profile_id
 * @property int $storefront_id
 * @property string $sd_bonus_loyalty
 * @property int $sd_bonus_loyalty_id
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cscart_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_order_id', 'company_id', 'issuer_id', 'user_id', 'timestamp', 'payment_id', 'repaid', 'localization_id', 'profile_id', 'storefront_id', 'description'], 'integer'],
            [['total', 'subtotal', 'discount', 'subtotal_discount', 'payment_surcharge', 'shipping_cost'], 'number'],
            [['notes', 'details', 'promotions'], 'string'],
            [['localization_id', 'sd_bonus_loyalty'], 'required'],
            [['is_parent_order', 'status', 'tax_exempt'], 'string', 'max' => 1],
            [['shipping_ids', 'promotion_ids', 'company', 'b_address', 'b_address_2', 's_address', 's_address_2'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'b_county', 'b_state', 'b_zipcode', 's_county', 's_state', 's_zipcode', 's_address_type', 'url'], 'string', 'max' => 32],
            [['b_firstname', 'b_lastname', 'b_phone', 's_firstname', 's_lastname', 's_phone', 'phone', 'fax', 'email'], 'string', 'max' => 128],
            [['b_city', 's_city'], 'string', 'max' => 64],
            [['b_country', 's_country', 'lang_code'], 'string', 'max' => 2],
            [['ip_address'], 'string', 'max' => 40],
            [['validation_code'], 'string', 'max' => 20],
        ];
    }
   
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'ID',
            'is_parent_order' => 'Is Parent Order',
            'parent_order_id' => 'Parent Order ID',
            'company_id' => 'Company ID',
            'issuer_id' => 'Issuer ID',
            'user_id' => 'User ID',
            'total' => 'Total',
            'subtotal' => 'Subtotal',
            'discount' => 'Discount',
            'subtotal_discount' => 'Subtotal Discount',
            'payment_surcharge' => 'Payment Surcharge',
            'shipping_ids' => 'Shipping Ids',
            'shipping_cost' => 'Shipping Cost',
            'timestamp' => 'Timestamp',
            'status' => 'Status',
            'notes' => 'Notes',
            'details' => 'Details',
            'promotions' => 'Promotions',
            'promotion_ids' => 'Promotion Ids',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'company' => 'Company',
            'b_firstname' => 'B Firstname',
            'b_lastname' => 'B Lastname',
            'b_address' => 'B Address',
            'b_address_2' => 'B Address 2',
            'b_city' => 'B City',
            'b_county' => 'B County',
            'b_state' => 'B State',
            'b_country' => 'B Country',
            'b_zipcode' => 'B Zipcode',
            'b_phone' => 'B Phone',
            's_firstname' => 'S Firstname',
            's_lastname' => 'S Lastname',
            's_address' => 'S Address',
            's_address_2' => 'S Address 2',
            's_city' => 'S City',
            's_county' => 'S County',
            's_state' => 'S State',
            's_country' => 'S Country',
            's_zipcode' => 'S Zipcode',
            's_phone' => 'S Phone',
            's_address_type' => 'S Address Type',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'url' => 'Url',
            'email' => 'Email',
            'payment_id' => 'Payment ID',
            'tax_exempt' => 'Tax Exempt',
            'lang_code' => 'Lang Code',
            'ip_address' => 'Ip Address',
            'repaid' => 'Repaid',
            'validation_code' => 'Validation Code',
            'localization_id' => 'Localization ID',
            'profile_id' => 'Profile ID',
            'storefront_id' => 'Storefront ID',
        ];
    }

    public static function fn_get_orders() 
    {   
        $orders = Yii::$app->db->createCommand(
            'SELECT *, cscart_status_descriptions.description AS status_description FROM cscart_orders' 
            . ' LEFT JOIN cscart_statuses ON cscart_statuses.status = cscart_orders.status'
            . ' LEFT JOIN cscart_status_descriptions ON cscart_status_descriptions.status_id = cscart_statuses.status_id')
            ->queryAll();

        return $orders;
    }

    public function getOrdersStatusId() 
    {
        return $this->hasOne(Statuses::class, ['status' => 'status']);
    }
}
