<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Spbu;
use frontend\models\SpbuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

/**
 * SpbuController implements the CRUD actions for Spbu model.
 */
class SpbuController extends Controller
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
     * Lists all Spbu models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new SpbuSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

     public function actionIndex()
    {
        $spbu = Spbu::find()->where(['status' => 1])->orderBy('spbu_id DESC');
        $pagespbu = new Pagination(['totalCount' => $spbu->count(), 'pageSize'=> 10]);
        $allSpbu = $spbu->offset($pagespbu->offset)
            ->limit($pagespbu->limit)
            ->all();

        $listSpbu = Spbu::find()->where(['status' => 1])->orderBy('spbu_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allSpbu' => $allSpbu,
            'pagespbu' => $pagespbu,
            'listSpbu' => $listSpbu,
        ]);
    }

    public function actionBaca($id)
    {

        $spbu = Spbu::find()->where(['status' => 1, 
            'spbu_id' => $id
        ]);

        return $this->render('read-spbu', [
            'spbu' => $spbu,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Spbu model.
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
     * Creates a new Spbu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Spbu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->spbu_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Spbu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->spbu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Spbu model.
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
     * Finds the Spbu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Spbu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Spbu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
