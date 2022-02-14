<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Masjid;
use frontend\models\MasjidSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

/**
 * MasjidController implements the CRUD actions for Masjid model.
 */
class MasjidController extends Controller
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
     * Lists all Masjid models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new MasjidSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        $masjid = Masjid::find()->where(['status' => 1])->orderBy('m_id DESC');
        $pagemasjid = new Pagination(['totalCount' => $masjid->count(), 'pageSize'=> 10]);
        $allMasjid = $masjid->offset($pagemasjid->offset)
            ->limit($pagemasjid->limit)
            ->all();

        $listMasjid = Masjid::find()->where(['status' => 1])->orderBy('m_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allMasjid' => $allMasjid,
            'pagemasjid' => $pagemasjid,
            'listMasjid' => $listMasjid,
        ]);
    }

    public function actionBaca($id)
    {

        $masjid = Masjid::find()->where(['status' => 1, 
            'm_id' => $id
        ]);

        return $this->render('read-masjid', [
            'masjid' => $masjid,
            'id' => $id,
        ]);    
    }

    /**
     * Displays a single Masjid model.
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
     * Creates a new Masjid model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Masjid();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->m_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Masjid model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->m_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Masjid model.
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
     * Finds the Masjid model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Masjid the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Masjid::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
