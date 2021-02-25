<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cart */

$this->title = 'Update Cart: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'type' => $model->type, 'user_type' => $model->user_type, 'item_id' => $model->item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
