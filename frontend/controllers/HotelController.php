<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Hotel;
use frontend\models\Berita;
use frontend\models\HotelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use frontend\models\FasilitasHotel;
use frontend\models\FasilitasKamarHotel;
use frontend\models\KamarHotel;
/**
 * HotelController implements the CRUD actions for Hotel model.
 */
class HotelController extends Controller
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
     * Lists all Hotel models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new HotelSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {

        $hotel = Hotel::find()->where(['status' => 1])->orderBy('tahun DESC');
        $pagehotel = new Pagination(['totalCount' => $hotel->count(), 'pageSize'=> 10]);
        $allHotel = $hotel->offset($pagehotel->offset)
                    ->limit($pagehotel->limit)
                    ->all();

        $listHotel = Hotel::find()->where(['status' => 1])->orderBy('hotel_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allHotel' => $allHotel,
            'pagehotel' => $pagehotel,
            'listHotel' => $listHotel,
        ]);

    }

    public function actionBaca($id)
    {
        // $connection = \Yii::$app->db;
        $hotel = Hotel::find()->where(['status' => 1, 
            'hotel_id' => $id
        ]);

        $fasilitass = FasilitasHotel::find()->where(['fh_hotel' =>$id])->orderBy('fh_id DESC')->one();

        $fasilitasKamar = FasilitasKamarHotel::find()->where(['kh_id' => $id])->orderBy('fkh_id DESC')->one();
        // $allKamar = KamarHotel::find()->where(['kh_hotel' => $id])->orderBy('kh_id DESC')->all();

        // var_dump($allKamar);

        return $this->render('read-hotel', [
            'hotel' => $hotel,
            'id' => $id,
            'fasilitass' => $fasilitass,
            'fasilitasKamar' => $fasilitasKamar, 
            // 'allKamar' => $allKamar,
        ]);    
    }

public function actionBaca2($id)
    {

       $berita = Berita::find()->where(['berita_status' => 1,
            'berita_id' => $id
        ]);

        return $this->render('/berita/read-berita', [
            'berita' => $berita,
            'id' => $id,
        ]);
    }


    /**
     * Displays a single Hotel model.
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
     * Creates a new Hotel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hotel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hotel_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hotel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hotel_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hotel model.
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
     * Finds the Hotel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hotel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hotel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
