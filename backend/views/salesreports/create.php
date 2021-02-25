<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SalesReports */

$this->title = 'Create Sales Reports';
$this->params['breadcrumbs'][] = ['label' => 'Sales Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-reports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
