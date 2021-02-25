<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'item_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extra')->textInput() ?>

    <?= $form->field($model, 'session_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_address')->textInput() ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'storefront_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
