<?php

namespace frontend\controllers;

use Yii;
use frontend\models\DestinasiWisata;
use frontend\models\DestinasiWisataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
/**
 * DestinasiWisataController implements the CRUD actions for DestinasiWisata model.
 */
class DestinasiWisataController extends Controller
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
     * Lists all DestinasiWisata models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $searchModel = new DestinasiWisataSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // // $destinasi = DestinasiWisata::find()->where(['status' => 1])->orderBy('tahun DESC');

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

        $destinasi = DestinasiWisata::find()->where(['status' => 1])->orderBy('tahun DESC');
        $pagedestinasi = new Pagination(['totalCount' => $destinasi->count(), 'pageSize'=> 10]);
        $allDestinasi = $destinasi->offset($pagedestinasi->offset)
                    ->limit($pagedestinasi->limit)
                    ->all();

        $listDestinasi = DestinasiWisata::find()->where(['status' => 1])->orderBy('id_destinasi DESC')->limit(5)->all();

        return $this->render('index', [
            'allDestinasi' => $allDestinasi,
            'pagedestinasi' => $pagedestinasi,
            'listDestinasi' => $listDestinasi,
        ]);

    }

    /**
     * Displays a single DestinasiWisata model.
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
     * Creates a new DestinasiWisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DestinasiWisata();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_destinasi]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DestinasiWisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_destinasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DestinasiWisata model.
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
     * Finds the DestinasiWisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DestinasiWisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DestinasiWisata::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionBaca($id)
    {

        // $destinasi = DestinasiWisata::find()->where(['status' => 1, 'id_destinasi' => $id_destinasi])->orderBy('id_destinasi DESC')->one();
        $destinasi = DestinasiWisata::find()->where(['status' => 1, 
            'id_destinasi' => $id
        ]);


        // $listDestinasi = DestinasiWisata::find()->where(['status' => 1])->andWhere(['<>', 'id_destinasi', $destinasi->id_destinasi])->orderBy('id_destinasi DESC')->limit(5)->all();

        // $listDestinasi = DestinasiWisata::find()->where(['status' => 1])->orderBy('id_destinasi DESC')->limit(5)->all();;

        return $this->render('read-destinasi', [
            'destinasi' => $destinasi,
            'id' => $id,
            // 'listDestinasi' => $listDestinasi,
            // 'listDestinasi' => $listDestinasi,
        ]);    
    }
}
