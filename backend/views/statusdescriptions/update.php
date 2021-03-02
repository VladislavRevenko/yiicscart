<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusDescriptions */

$this->title = 'Update Status Descriptions: ' . $model->status_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->status_id, 'url' => ['view', 'status_id' => $model->status_id, 'lang_code' => $model->lang_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-descriptions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
