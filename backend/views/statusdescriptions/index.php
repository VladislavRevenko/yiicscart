<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStatusDescriptions */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Status Descriptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-descriptions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Status Descriptions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'status_id',
            'description',
            'email_subj:email',
            'email_header:ntext',
            'lang_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
