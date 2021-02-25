<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SalesReports */

$this->title = 'Update Sales Reports: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sales Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->report_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sales-reports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
