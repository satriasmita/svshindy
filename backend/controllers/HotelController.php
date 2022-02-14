<?php

namespace backend\controllers;

use Yii;
use backend\models\Hotel;
use backend\models\HotelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
    public function actionIndex()
    {
        $searchModel = new HotelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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
    // public function actionCreate()
    // {
    //     $model = new Hotel();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->hotel_id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate()
    {
        $model = new Hotel();

        $imageFile = UploadedFile::getInstance($model,'foto');
        $imageFile2 = UploadedFile::getInstance($model,'foto2');
        $imageFile3 = UploadedFile::getInstance($model,'foto3');
        $imageFile4 = UploadedFile::getInstance($model,'foto4');

        if ($model->load(Yii::$app->request->post())) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $model->foto2 = UploadedFile::getInstance($model, 'foto2');
            $model->foto3 = UploadedFile::getInstance($model, 'foto3');
            $model->foto4 = UploadedFile::getInstance($model, 'foto4');
            if (! $model->foto) {
                $model->save();
            } else {
                if(isset($imageFile->size)){
                $imageFile->saveAs('images/Hotel/'.$imageFile->baseName.'.'.$imageFile->extension);
                $imageFile2->saveAs('images/Hotel/'.$imageFile2->baseName.'.'.$imageFile2->extension);
                $imageFile3->saveAs('images/Hotel/'.$imageFile3->baseName.'.'.$imageFile3->extension);
                $imageFile4->saveAs('images/Hotel/'.$imageFile4->baseName.'.'.$imageFile4->extension);
            }

            $model->foto = $imageFile->baseName.'.'.$imageFile->extension;
            $model->foto2 = $imageFile2->baseName.'.'.$imageFile2->extension;
            $model->foto3 = $imageFile3->baseName.'.'.$imageFile3->extension;
            $model->foto4 = $imageFile4->baseName.'.'.$imageFile4->extension;

            $model->save(false);
            }
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['view', 'id' => $model->hotel_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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
