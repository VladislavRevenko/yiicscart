<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cart */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'user_id' => $model->user_id, 'type' => $model->type, 'user_type' => $model->user_type, 'item_id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'user_id' => $model->user_id, 'type' => $model->type, 'user_type' => $model->user_type, 'item_id' => $model->item_id], [
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
            'user_id',
            'timestamp:datetime',
            'type',
            'user_type',
            'item_id',
            'item_type',
            'product_id',
            'amount',
            'price',
            'extra',
            'session_id',
            'ip_address',
            'order_id',
            'storefront_id',
        ],
    ]) ?>

</div>
