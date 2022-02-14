<?php

namespace backend\controllers;

use Yii;
use backend\models\Agenda;
use backend\models\AgendaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * AgendaController implements the CRUD actions for Agenda model.
 */
class AgendaController extends Controller
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
     * Lists all Agenda models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AgendaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Agenda model.
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
     * Creates a new Agenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Agenda();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->agenda_id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

   // public function actionCreate()
   //  {
   //      $model = new Agenda();

   //      if ($model->load(Yii::$app->request->post())) {

   //          $imageFile = UploadedFile::getInstance($model,'agenda_photoid');

   //          if(isset($imageFile->size)){
   //              $imageFile->saveAs('images/Agenda/'.$imageFile->baseName.'.'.$imageFile->extension);
   //          }

   //          $model->agenda_photoid = $imageFile->baseName.'.'.$imageFile->extension;

   //          $model->save(false);
   //          Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
   //          return $this->redirect(['view', 'id' => $model->agenda_id]);
   //      } else {
   //          return $this->render('create', [
   //              'model' => $model,
   //          ]);
   //      }
   //  }

     public function actionCreate()
    {
        $model = new Agenda();
        $today = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->agenda_mulai = $today;
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
     * Updates an existing Agenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->agenda_id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImg = $model->agenda_photoid;
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
     * Deletes an existing Agenda model.
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
     * Finds the Agenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Agenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Agenda::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
