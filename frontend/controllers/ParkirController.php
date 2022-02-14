<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Parkir;
use frontend\models\ParkirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

/**
 * ParkirController implements the CRUD actions for Parkir model.
 */
class ParkirController extends Controller
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
     * Lists all Parkir models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new ParkirSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        $parkir = Parkir::find()->where(['p_status' => 1])->orderBy('p_id DESC');
        $pageparkir = new Pagination(['totalCount' => $parkir->count(), 'pageSize'=> 10]);
        $allParkir = $parkir->offset($pageparkir->offset)
            ->limit($pageparkir->limit)
            ->all();

        $listParkir = Parkir::find()->where(['p_status' => 1])->orderBy('p_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allParkir' => $allParkir,
            'pageparkir' => $pageparkir,
            'listParkir' => $listParkir,
        ]);
    }

    public function actionBaca($id)
    {

        $parkir = Parkir::find()->where(['p_status' => 1, 
            'p_id' => $id
        ]);

        return $this->render('read-parkir', [
            'parkir' => $parkir,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Parkir model.
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
     * Creates a new Parkir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parkir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->p_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Parkir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->p_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Parkir model.
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
     * Finds the Parkir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parkir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parkir::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
