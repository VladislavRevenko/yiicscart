<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchStatusDescriptions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-descriptions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'status_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'email_subj') ?>

    <?= $form->field($model, 'email_header') ?>

    <?= $form->field($model, 'lang_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
