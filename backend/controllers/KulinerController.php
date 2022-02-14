<?php

namespace backend\controllers;

use Yii;
use backend\models\Kuliner;
use backend\models\KulinerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * KulinerController implements the CRUD actions for Kuliner model.
 */
class KulinerController extends Controller
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
     * Lists all Kuliner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KulinerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kuliner model.
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
     * Creates a new Kuliner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Kuliner();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_kuliner]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    //  public function actionCreate()
    // {
    //     $model = new Kuliner();

    //     if ($model->load(Yii::$app->request->post())) {

    //         $imageFile = UploadedFile::getInstance($model,'foto');

    //         if(isset($imageFile->size)){
    //             $imageFile->saveAs('images/Kuliner/'.$imageFile->baseName.'.'.$imageFile->extension);
    //         }

    //         $model->foto = $imageFile->baseName.'.'.$imageFile->extension;

    //         $model->save(false);
    //         Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
    //         return $this->redirect(['view', 'id' => $model->id_kuliner]);
    //     } else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    public function actionCreate()
    {
        $model = new Kuliner();

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
     * Updates an existing Kuliner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_kuliner]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

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
     * Deletes an existing Kuliner model.
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
     * Finds the Kuliner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kuliner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kuliner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
