<?php

namespace backend\controllers;

use Yii;
use backend\models\DestinasiWisata;
use backend\models\DestinasiWisataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
        $searchModel = new DestinasiWisataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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
    // public function actionCreate()
    // {
    //     $model = new DestinasiWisata();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_destinasi]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionCreate()
    {
        $model = new DestinasiWisata();

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
                $imageFile->saveAs('images/Wisata/'.$imageFile->baseName.'.'.$imageFile->extension);
                $imageFile2->saveAs('images/Wisata/'.$imageFile2->baseName.'.'.$imageFile2->extension);
                $imageFile3->saveAs('images/Wisata/'.$imageFile3->baseName.'.'.$imageFile3->extension);
                $imageFile4->saveAs('images/Wisata/'.$imageFile4->baseName.'.'.$imageFile4->extension);
            }

            $model->foto = $imageFile->baseName.'.'.$imageFile->extension;
            $model->foto2 = $imageFile2->baseName.'.'.$imageFile2->extension;
            $model->foto3 = $imageFile3->baseName.'.'.$imageFile3->extension;
            $model->foto4 = $imageFile4->baseName.'.'.$imageFile4->extension;

            $model->save(false);
            }
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['view', 'id' => $model->id_destinasi]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     // return $this->redirect(['index']);
        //     return $this->redirect(['view', 'id' => $model->wargaid]);
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);
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
        $oldImg = $model->foto;

        if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            if (! $model->image) {
                $model->save();
            }else{
                if ($model->upload()) {
                    if ($oldImg) {
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
}
