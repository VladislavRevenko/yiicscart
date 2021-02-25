<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCart */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'timestamp:datetime',
            'type',
            'user_type',
            'item_id',
            //'item_type',
            //'product_id',
            //'amount',
            //'price',
            //'extra',
            //'session_id',
            //'ip_address',
            //'order_id',
            //'storefront_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
