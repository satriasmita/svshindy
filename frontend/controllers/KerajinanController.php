<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Kerajinan;
use frontend\models\KerajinanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

/**
 * KerajinanController implements the CRUD actions for Kerajinan model.
 */
class KerajinanController extends Controller
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
     * Lists all Kerajinan models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new KerajinanSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }


    public function actionIndex()
    {
        $kerajinan = Kerajinan::find()->where(['status' => 1])->orderBy('tahun DESC');
        $pagekerajinan = new Pagination(['totalCount' => $kerajinan->count(), 'pageSize'=> 10]);
        $allKerajinan = $kerajinan->offset($pagekerajinan->offset)
            ->limit($pagekerajinan->limit)
            ->all();

        $listKerajinan = Kerajinan::find()->where(['status' => 1])->orderBy('kerajinan_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allKerajinan' => $allKerajinan,
            'pagekerajinan' => $pagekerajinan,
            'listKerajinan' => $listKerajinan,
        ]);
    }

    public function actionBaca($id)
    {

        $kerajinan = Kerajinan::find()->where(['status' => 1, 
            'kerajinan_id' => $id
        ]);

        return $this->render('read-kerajinan', [
            'kerajinan' => $kerajinan,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Kerajinan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kerajinan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kerajinan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kerajinan_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kerajinan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kerajinan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kerajinan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kerajinan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kerajinan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kerajinan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
