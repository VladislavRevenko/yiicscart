<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'is_parent_order') ?>

    <?= $form->field($model, 'parent_order_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'issuer_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'subtotal_discount') ?>

    <?php // echo $form->field($model, 'payment_surcharge') ?>

    <?php // echo $form->field($model, 'shipping_ids') ?>

    <?php // echo $form->field($model, 'shipping_cost') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'details') ?>

    <?php // echo $form->field($model, 'promotions') ?>

    <?php // echo $form->field($model, 'promotion_ids') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'b_firstname') ?>

    <?php // echo $form->field($model, 'b_lastname') ?>

    <?php // echo $form->field($model, 'b_address') ?>

    <?php // echo $form->field($model, 'b_address_2') ?>

    <?php // echo $form->field($model, 'b_city') ?>

    <?php // echo $form->field($model, 'b_county') ?>

    <?php // echo $form->field($model, 'b_state') ?>

    <?php // echo $form->field($model, 'b_country') ?>

    <?php // echo $form->field($model, 'b_zipcode') ?>

    <?php // echo $form->field($model, 'b_phone') ?>

    <?php // echo $form->field($model, 's_firstname') ?>

    <?php // echo $form->field($model, 's_lastname') ?>

    <?php // echo $form->field($model, 's_address') ?>

    <?php // echo $form->field($model, 's_address_2') ?>

    <?php // echo $form->field($model, 's_city') ?>

    <?php // echo $form->field($model, 's_county') ?>

    <?php // echo $form->field($model, 's_state') ?>

    <?php // echo $form->field($model, 's_country') ?>

    <?php // echo $form->field($model, 's_zipcode') ?>

    <?php // echo $form->field($model, 's_phone') ?>

    <?php // echo $form->field($model, 's_address_type') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'payment_id') ?>

    <?php // echo $form->field($model, 'tax_exempt') ?>

    <?php // echo $form->field($model, 'lang_code') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'repaid') ?>

    <?php // echo $form->field($model, 'validation_code') ?>

    <?php // echo $form->field($model, 'localization_id') ?>

    <?php // echo $form->field($model, 'profile_id') ?>

    <?php // echo $form->field($model, 'storefront_id') ?>

    <?php // echo $form->field($model, 'sd_bonus_loyalty') ?>

    <?php // echo $form->field($model, 'sd_bonus_loyalty_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
