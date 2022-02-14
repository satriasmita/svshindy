<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use yii\data\Pagination;
use backend\models\Profil;

/**
 * ProfilController implements the CRUD actions for Info model.
 */
class ProfilController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Profil models.
     * @return mixed
     */
    public function actionIndex()
    {

        $profil = Profil::find()->where(['prof_status' => 1])->orderBy('prof_id ASC')->one();

        $listProf = Profil::find()->where(['prof_status' => 1])->orderBy('prof_id ASC')->all();

        return $this->render('index', [
            'profil' => $profil,
            'listProf' => $listProf,
        ]);
    }

    public function actionSlug($slug)
    {
        $profil = Profil::find()->where(['slug'=>$slug])->orderBy('prof_id DESC')->one();

        $listProf = Profil::find()->where(['prof_status' => 1])->orderBy('prof_id ASC')->all();

        return $this->render('index', [
            'profil' => $profil,
            'listProf' => $listProf,
        ]);    
    }
}
