<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'is_parent_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_order_id')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'issuer_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtotal_discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_surcharge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipping_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipping_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'promotions')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'promotion_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_address_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'tax_exempt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip_address')->textInput() ?>

    <?= $form->field($model, 'repaid')->textInput() ?>

    <?= $form->field($model, 'validation_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localization_id')->textInput() ?>

    <?= $form->field($model, 'profile_id')->textInput() ?>

    <?= $form->field($model, 'storefront_id')->textInput() ?>

    <?= $form->field($model, 'sd_bonus_loyalty')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sd_bonus_loyalty_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
