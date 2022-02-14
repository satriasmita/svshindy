<?php

namespace backend\controllers;

use Yii;
use backend\models\Restoran;
use backend\models\RestoranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * RestoranController implements the CRUD actions for Restoran model.
 */
class RestoranController extends Controller
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
     * Lists all Restoran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RestoranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Restoran model.
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
     * Creates a new Restoran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Restoran();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->restoran_id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    // public function actionCreate()
    // {
    //     $model = new Restoran();

    //     if ($model->load(Yii::$app->request->post())) {

    //         $imageFile = UploadedFile::getInstance($model,'restoran_photo');

    //         if(isset($imageFile->size)){
    //             $imageFile->saveAs('images/Wisata/'.$imageFile->baseName.'.'.$imageFile->extension);
    //         }

    //         $model->restoran_photo = $imageFile->baseName.'.'.$imageFile->extension;

    //         $model->save(false);
    //         Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
    //         return $this->redirect(['view', 'id' => $model->restoran_id]);
    //     } else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    public function actionCreate()
    {
        $model = new Restoran();

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if (! $model->image) {
                $model->save();
            } else {
                if ($model->upload()) {
                    // $model->thumb();
                    $model->save(false);
                }
            }
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Restoran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->restoran_id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImg = $model->restoran_photo;
        $today = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post())){
            $model->image = UploadedFile::getInstance($model, 'image');
            if(! $model->image){
                $model->save();
            } else{
                if ($model->upload()){
                    if (oldImg){
                        $this->deleteImg($oldImg);
                    }
                    $model->save(false);
                }
            }
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Diperbarui </strong>');
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,

            ]);
        }
    }
    /**
     * Deletes an existing Restoran model.
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
     * Finds the Restoran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Restoran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Restoran::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
