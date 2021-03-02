<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StatusDescriptions */

$this->title = $model->status_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="status-descriptions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'status_id' => $model->status_id, 'lang_code' => $model->lang_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'status_id' => $model->status_id, 'lang_code' => $model->lang_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'status_id',
            'description',
            'email_subj:email',
            'email_header:ntext',
            'lang_code',
        ],
    ]) ?>

</div>
