<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Kuliner;
use frontend\models\KulinerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
/**
 * KulinerController implements the CRUD actions for Kuliner model.
 */
class KulinerController extends Controller
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
     * Lists all Kuliner models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new KulinerSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }
    public function actionIndex()
    {
        $kuliner = Kuliner::find()->where(['status' => 1])->orderBy('tahun DESC');
        $pagekuliner = new Pagination(['totalCount' => $kuliner->count(), 'pageSize' => 10]);
        $allkuliner = $kuliner->offset($pagekuliner->offset)
        ->limit($pagekuliner->limit)
        ->all();

        $listKuliner = Kuliner::find()->where(['status' => 1])->
            orderBy('id_kuliner DESC')->limit(5)->all();

        return $this->render('index', [
            'allkuliner' => $allkuliner,
            'pagekuliner' => $pagekuliner,
            'listKuliner' => $listKuliner,
        ]);
    }

    public function actionBaca($id)
    {
        $kuliner = Kuliner::find()->where(['status' => 1, 
            'id_kuliner' => $id
        ]);
        return $this->render('read-kuliner', [
            'kuliner' => $kuliner,
            'id' => $id,
        ]);    
    }


    /**
     * Displays a single Kuliner model.
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
     * Creates a new Kuliner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kuliner();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kuliner]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kuliner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kuliner]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kuliner model.
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
     * Finds the Kuliner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kuliner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kuliner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
