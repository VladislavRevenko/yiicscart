<?php

namespace app\controllers;

use Yii;
use app\models\StatusDescriptions;
use app\models\SearchStatusDescriptions;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatusdescriptionsController implements the CRUD actions for StatusDescriptions model.
 */
class StatusdescriptionsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all StatusDescriptions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchStatusDescriptions();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StatusDescriptions model.
     * @param integer $status_id
     * @param string $lang_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($status_id, $lang_code)
    {
        return $this->render('view', [
            'model' => $this->findModel($status_id, $lang_code),
        ]);
    }

    /**
     * Creates a new StatusDescriptions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StatusDescriptions();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'status_id' => $model->status_id, 'lang_code' => $model->lang_code]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StatusDescriptions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $status_id
     * @param string $lang_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($status_id, $lang_code)
    {
        $model = $this->findModel($status_id, $lang_code);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'status_id' => $model->status_id, 'lang_code' => $model->lang_code]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StatusDescriptions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $status_id
     * @param string $lang_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($status_id, $lang_code)
    {
        $this->findModel($status_id, $lang_code)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StatusDescriptions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $status_id
     * @param string $lang_code
     * @return StatusDescriptions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($status_id, $lang_code)
    {
        if (($model = StatusDescriptions::findOne(['status_id' => $status_id, 'lang_code' => $lang_code])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
