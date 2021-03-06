<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shipments */

$this->title = 'Update Shipments: ' . $model->shipment_id;
$this->params['breadcrumbs'][] = ['label' => 'Shipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shipment_id, 'url' => ['view', 'id' => $model->shipment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shipments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
