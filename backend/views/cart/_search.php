<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'user_type') ?>

    <?= $form->field($model, 'item_id') ?>

    <?php // echo $form->field($model, 'item_type') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'extra') ?>

    <?php // echo $form->field($model, 'session_id') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'order_id') ?>

    <?php // echo $form->field($model, 'storefront_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
