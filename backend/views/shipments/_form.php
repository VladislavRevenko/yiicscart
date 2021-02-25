<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shipments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shipping_id')->textInput() ?>

    <?= $form->field($model, 'tracking_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carrier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
