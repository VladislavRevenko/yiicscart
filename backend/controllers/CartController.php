<?php

namespace backend\controllers;

use Yii;
use app\models\Cart;
use app\models\SearchCart;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CartController implements the CRUD actions for Cart model.
 */
class CartController extends Controller
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
     * Lists all Cart models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchCart();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cart model.
     * @param integer $user_id
     * @param string $type
     * @param string $user_type
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user_id, $type, $user_type, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_id, $type, $user_type, $item_id),
        ]);
    }

    /**
     * Creates a new Cart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cart();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'type' => $model->type, 'user_type' => $model->user_type, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $user_id
     * @param string $type
     * @param string $user_type
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user_id, $type, $user_type, $item_id)
    {
        $model = $this->findModel($user_id, $type, $user_type, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'type' => $model->type, 'user_type' => $model->user_type, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cart model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $user_id
     * @param string $type
     * @param string $user_type
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_id, $type, $user_type, $item_id)
    {
        $this->findModel($user_id, $type, $user_type, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $user_id
     * @param string $type
     * @param string $user_type
     * @param integer $item_id
     * @return Cart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id, $type, $user_type, $item_id)
    {
        if (($model = Cart::findOne(['user_id' => $user_id, 'type' => $type, 'user_type' => $user_type, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
