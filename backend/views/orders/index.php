<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchOrders */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'order_id',
            //'is_parent_order',
            //'parent_order_id',
            //'company_id',
            //'issuer_id',
            //'user_id',
            'total',
            //'subtotal',
            //'discount',
            //'subtotal_discount',
            //'payment_surcharge',
            //'shipping_ids',
            //'shipping_cost',
            'timestamp:datetime',
            'status',
            //'notes:ntext',
            //'details:ntext',
            //'promotions:ntext',
            //'promotion_ids',
            //'firstname',
            //'lastname',
            //'company',
            //'b_firstname',
            //'b_lastname',
            //'b_address',
            //'b_address_2',
            //'b_city',
            //'b_county',
            //'b_state',
            //'b_country',
            //'b_zipcode',
            //'b_phone',
            //'s_firstname',
            //'s_lastname',
            //'s_address',
            //'s_address_2',
            //'s_city',
            //'s_county',
            //'s_state',
            //'s_country',
            //'s_zipcode',
            //'s_phone',
            //'s_address_type',
            //'phone',
            //'fax',
            //'url:url',
            //'email:email',
            //'payment_id',
            //'tax_exempt',
            //'lang_code',
            //'ip_address',
            //'repaid',
            //'validation_code',
            //'localization_id',
            //'profile_id',
            //'storefront_id',
            //'sd_bonus_loyalty:ntext',
            //'sd_bonus_loyalty_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
