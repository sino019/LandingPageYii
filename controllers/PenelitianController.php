<?php

namespace app\controllers;

use app\models\penelitian;
use app\models\PenelitianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenelitianController implements the CRUD actions for penelitian model.
 */
class PenelitianController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all penelitian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenelitianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single penelitian model.
     * @param int $id_penelitian Id Penelitian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penelitian)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penelitian),
        ]);
    }

    /**
     * Creates a new penelitian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new penelitian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penelitian' => $model->id_penelitian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing penelitian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penelitian Id Penelitian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penelitian)
    {
        $model = $this->findModel($id_penelitian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penelitian' => $model->id_penelitian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing penelitian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penelitian Id Penelitian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penelitian)
    {
        $this->findModel($id_penelitian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the penelitian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penelitian Id Penelitian
     * @return penelitian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penelitian)
    {
        if (($model = penelitian::findOne(['id_penelitian' => $id_penelitian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
