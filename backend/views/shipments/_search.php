<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchShipments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'shipment_id') ?>

    <?= $form->field($model, 'shipping_id') ?>

    <?= $form->field($model, 'tracking_number') ?>

    <?= $form->field($model, 'carrier') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
