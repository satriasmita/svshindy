<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Berita;
use frontend\models\BeritaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use yii\data\Pagination;
use backend\models\DestinasiWisata;

/**
 * BeritaController implements the CRUD actions for Berita model.
 */
class BeritaController extends Controller
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
     * Lists all Berita models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new BeritaSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        // $allProduk = Produk::find()->where(['pro_status' => 1])->orderBy('pro_id DESC')->all();

        $berita = Berita::find()->where(['berita_status' => 1])->orderBy('berita_id DESC');
        $pageberita = new Pagination(['totalCount' => $berita->count(), 'pageSize'=> 12]);
        $allBerita = $berita->offset($pageberita->offset)
                    ->limit($pageberita->limit)
                    ->all();

        $listBerita = Berita::find()->where(['berita_status' => 1])->orderBy('berita_id DESC')->limit(5)->all();

        return $this->render('index', [
            'allBerita' => $allBerita,
            'pageberita' => $pageberita,
            'listBerita' => $listBerita,
        ]);
    }

    public function actionSlug($slug)
    {

        $berita = Berita::find()->where(['berita_status' => 1, 'slug' => $slug])->orderBy('berita_id DESC')->one();

        $berita->berita_hit+= 1;
        $berita->save();

        $listBerita = Berita::find()->where(['berita_status' => 1])->andWhere(['<>', 'berita_id', $berita->berita_id])->orderBy('berita_id DESC')->limit(5)->all();

        $listDestinasi = DestinasiWisata::find()->where(['status' => 1])->orderBy('id_destinasi DESC')->limit(5)->all();;

        return $this->render('read-berita', [
            'berita' => $berita,
            'listBerita' => $listBerita,
            'listDestinasi' => $listDestinasi,
        ]);    
    }


    /**
     * Displays a single Berita model.
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
     * Creates a new Berita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Berita();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->berita_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Berita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->berita_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Berita model.
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
     * Finds the Berita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Berita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Berita::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
