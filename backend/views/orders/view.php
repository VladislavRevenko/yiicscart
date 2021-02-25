<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'is_parent_order',
            'parent_order_id',
            'company_id',
            'issuer_id',
            'user_id',
            'total',
            'subtotal',
            'discount',
            'subtotal_discount',
            'payment_surcharge',
            'shipping_ids',
            'shipping_cost',
            'timestamp:datetime',
            'status',
            'notes:ntext',
            'details:ntext',
            'promotions:ntext',
            'promotion_ids',
            'firstname',
            'lastname',
            'company',
            'b_firstname',
            'b_lastname',
            'b_address',
            'b_address_2',
            'b_city',
            'b_county',
            'b_state',
            'b_country',
            'b_zipcode',
            'b_phone',
            's_firstname',
            's_lastname',
            's_address',
            's_address_2',
            's_city',
            's_county',
            's_state',
            's_country',
            's_zipcode',
            's_phone',
            's_address_type',
            'phone',
            'fax',
            'url:url',
            'email:email',
            'payment_id',
            'tax_exempt',
            'lang_code',
            'ip_address',
            'repaid',
            'validation_code',
            'localization_id',
            'profile_id',
            'storefront_id',
            'sd_bonus_loyalty:ntext',
            'sd_bonus_loyalty_id',
        ],
    ]) ?>

</div>
