<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pemesanan;
use frontend\models\PemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Hotel;
use backend\models\FasilitasHotel;
use backend\models\KamarHotel;
use backend\models\FasilitasKamarHotel;

/**
 * PemesananController implements the CRUD actions for Pemesanan model.
 */
class PemesananController extends Controller
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
     * Lists all Pemesanan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PemesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pemesanan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        $carihotel = Pemesanan::findOne($id);
        $namahotel = $carihotel->pemesanan_hotel_id;
        $carifasilitas = FasilitasHotel::find()->where(['fh_hotel'=>$namahotel])->one();
        $carikamar = KamarHotel::find()->where(['kh_hotel'=>$namahotel])->one();


        return $this->render('view', [
            'model' => $this->findModel($id),
            'carifasilitas' => $carifasilitas,
            'carikamar' => $carikamar,
        ]);
    }

    public function actionSearchPemesanan($id)
    {

        $model = $this->findModel($id);
        $hotel = Hotel::find()->where(['hotel_id' => 'pemesanan_hotel_id'])->one();
        $carihotel = Pemesanan::findOne($id);
        $namahotel = $carihotel->pemesanan_hotel_id;
        $carifasilitas = FasilitasHotel::find()->where(['fh_hotel'=>$namahotel])->one();
        $carikamar = KamarHotel::find()->where(['kh_hotel'=>$namahotel])->one();
        $carifaskamar = FasilitasKamarHotel::find()->where(['kh_id'=>$carikamar])->one();

        return $this->render('search-pemesanan', [
            'model' => $model,
            'hotel' => $hotel,
            'carifasilitas' => $carifasilitas,
            'namahotel' => $namahotel,
            'carikamar' => $carikamar,
            'carifaskamar' => $carifaskamar,
        ]);
    }

    public function actionDetailPemesanan($id){
        
        $model = $this->findModel($id);
        $hotel = Hotel::find()->where(['hotel_id' => 'pemesanan_hotel_id'])->one();

        $booking = Pemesanan::findOne($id);
    //    var_dump($booking);die;
        
        $carihotel = Pemesanan::findOne($id);
        $namahotel = $carihotel->pemesanan_hotel_id;
        $carifasilitas = FasilitasHotel::find()->where(['fh_hotel'=>$namahotel])->one();
        $carikamar = KamarHotel::find()->where(['kh_hotel'=>$namahotel])->one();
        $carifaskamar = FasilitasKamarHotel::find()->where(['kh_id'=>$carikamar])->one();
    

        if ($booking->load(Yii::$app->request->post())/* && $booking->save()*/) {
            $booking->save(false);

            return $this->redirect(['booking', 'id' => $model->pemesanan_id]);
        }

        return $this->render('detail-pemesanan',[
            'model' => $model,
            'hotel' => $hotel,
            'carifasilitas' => $carifasilitas,
            'carikamar' => $carikamar,
            'carifaskamar' => $carifaskamar,
            'booking' => $booking,
        ]);
    }

    public function actionBooking($id){

        $model = $this->findModel($id);
        $hotel = Hotel::find()->where(['hotel_id' => 'pemesanan_hotel_id'])->one();

        $booking = Pemesanan::findOne($id);
    //    var_dump($booking);die;
        
        $carihotel = Pemesanan::findOne($id);
        $namahotel = $carihotel->pemesanan_hotel_id;
        $carifasilitas = FasilitasHotel::find()->where(['fh_hotel'=>$namahotel])->one();
        $carikamar = KamarHotel::find()->where(['kh_hotel'=>$namahotel])->one();
        $carifaskamar = FasilitasKamarHotel::find()->where(['kh_id'=>$carikamar])->one();
    //   var_dump($model);die;
        return $this->render('booking',[
            'model' => $model,
            'hotel' => $hotel,
            'carifasilitas' => $carifasilitas,
            'carikamar' => $carikamar,
            'carifaskamar' => $carifaskamar,
            'booking' => $booking,
        ]);
    }

    /**
     * Creates a new Pemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pemesanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pemesanan_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pemesanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pemesanan_id]);
        }

        return $this->render('detail-pemesanan', [
            'model' => $model,
        ]);
    }



    /**
     * Deletes an existing Pemesanan model.
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
     * Finds the Pemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pemesanan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
