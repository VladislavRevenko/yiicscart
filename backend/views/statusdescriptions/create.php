<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusDescriptions */

$this->title = 'Create Status Descriptions';
$this->params['breadcrumbs'][] = ['label' => 'Status Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-descriptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
