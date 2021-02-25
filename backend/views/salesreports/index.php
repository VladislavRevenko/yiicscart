<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchSalesReports */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-reports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sales Reports', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'report_id',
            'position',
            'name',
            'status',
            'type',
            //'period',
            //'time_from:datetime',
            //'time_to:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
