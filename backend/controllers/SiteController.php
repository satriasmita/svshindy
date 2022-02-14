<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Surat;
use backend\models\SuratSearch;
use backend\models\PendudukSearch;
use backend\models\Penduduk;
use backend\models\AdmDesa;
use backend\models\Ultah;
use backend\models\DestinasiWisata;
use backend\models\DestinasiWisataSearch;
use backend\models\Kuliner;
use backend\models\KulinerSearch;
use yii\base\DynamicModel;
use backend\models\UltahuSearch;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'ultah', 'cetak', 'skak', 'skawh', 'skawm', 'skb', 'skbeasiswa', 'skbk', 'skbm', 'skbpr', 'skbse', 'skd', 'skgh', 'skh', 'skj', 'skk', 'skkb', 'skmd', 'skmdv', 'skn', 'skp', 'skpbb', 'skpindah', 'sksk', 'skst', 'sktditemukan', 'sktmi', 'sktmii', 'sktmp', 'sktt', 'sku'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $todayMonth = date('Y-m-01');
        // $admdesa = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        // $tahun = date('Y');
        // $bulan = date('m');
        // $hari = date('d');
        // if ($admdesa == NULL){
        //     $ultah = Penduduk::find()->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1])->all();

        // $penduduk = Penduduk::find()->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1])->count();
        // $skak = Surat::find()->where(['id_jenis'=>1])->count();
        // $skawh = Surat::find()->where(['id_jenis'=> 2])->count();
        // $skawm = Surat::find()->where(['id_jenis'=> 3])->count();
        // $skb = Surat::find()->where(['id_jenis'=> 4])->count();
        // $skbm = Surat::find()->where(['id_jenis'=> 5])->count();
        // $skbpr = Surat::find()->where(['id_jenis'=> 6])->count();
        // $skd = Surat::find()->where(['id_jenis'=> 7])->count();
        // $skgh = Surat::find()->where(['id_jenis'=> 8])->count();
        // $skh = Surat::find()->where(['id_jenis'=> 9])->count();
        // $skj = Surat::find()->where(['id_jenis'=> 10])->count();
        // $skk = Surat::find()->where(['id_jenis'=> 11])->count();
        // $skkb = Surat::find()->where(['id_jenis'=> 12])->count();
        // $skmd = Surat::find()->where(['id_jenis'=> 13])->count();
        // $skn = Surat::find()->where(['id_jenis'=> 14])->count();
        // $skp = Surat::find()->where(['id_jenis'=> 15])->count();
        // $skpbb = Surat::find()->where(['id_jenis'=> 16])->count();
        // $sksk = Surat::find()->where(['id_jenis'=> 17])->count();
        // $skst = Surat::find()->where(['id_jenis'=> 18 ])->count();
        // $sktmi = Surat::find()->where(['id_jenis'=> 19 ])->count();
        // $sktmii = Surat::find()->where(['id_jenis'=> 20])->count();
        // $sktmp = Surat::find()->where(['id_jenis'=> 21])->count();
        // $sktt = Surat::find()->where(['id_jenis'=> 22])->count();
        // $sku = Surat::find()->where(['id_jenis'=> 23])->count();
        // $skbse = Surat::find()->where(['id_jenis'=> 24])->count();
        // $skbeasiswa = Surat::find()->where(['id_jenis'=> 25])->count();
        // $skmdv = Surat::find()->where(['id_jenis'=> 26])->count();
        // $skpindah = Surat::find()->where(['id_jenis'=> 27])->count();
        // $sktditemukan = Surat::find()->where(['id_jenis'=> 28])->count();
        // $skbk = Surat::find()->where(['id_jenis'=> 29])->count();
        // } else {
        // $ultah = Penduduk::find()->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1,'NO_KEL'=>$admdesa->id_KEL])->all();

        // $penduduk = Penduduk::find()->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1,'NO_KEL'=>$admdesa->id_KEL])->count();
        // $skak = Surat::find()->where(['id_jenis'=>1, 'desa'=>$admdesa->id_KEL])->count();
        // $skawh = Surat::find()->where(['id_jenis'=> 2, 'desa'=>$admdesa->id_KEL])->count();
        // $skawm = Surat::find()->where(['id_jenis'=> 3, 'desa'=>$admdesa->id_KEL])->count();
        // $skb = Surat::find()->where(['id_jenis'=> 4, 'desa'=>$admdesa->id_KEL])->count();
        // $skbm = Surat::find()->where(['id_jenis'=> 5, 'desa'=>$admdesa->id_KEL])->count();
        // $skbpr = Surat::find()->where(['id_jenis'=> 6, 'desa'=>$admdesa->id_KEL])->count();
        // $skd = Surat::find()->where(['id_jenis'=> 7, 'desa'=>$admdesa->id_KEL])->count();
        // $skgh = Surat::find()->where(['id_jenis'=> 8, 'desa'=>$admdesa->id_KEL])->count();
        // $skh = Surat::find()->where(['id_jenis'=> 9, 'desa'=>$admdesa->id_KEL])->count();
        // $skj = Surat::find()->where(['id_jenis'=> 10, 'desa'=>$admdesa->id_KEL])->count();
        // $skk = Surat::find()->where(['id_jenis'=> 11, 'desa'=>$admdesa->id_KEL])->count();
        // $skkb = Surat::find()->where(['id_jenis'=> 12, 'desa'=>$admdesa->id_KEL])->count();
        // $skmd = Surat::find()->where(['id_jenis'=> 13, 'desa'=>$admdesa->id_KEL])->count();
        // $skn = Surat::find()->where(['id_jenis'=> 14, 'desa'=>$admdesa->id_KEL])->count();
        // $skp = Surat::find()->where(['id_jenis'=> 15, 'desa'=>$admdesa->id_KEL])->count();
        // $skpbb = Surat::find()->where(['id_jenis'=> 16, 'desa'=>$admdesa->id_KEL])->count();
        // $sksk = Surat::find()->where(['id_jenis'=> 17, 'desa'=>$admdesa->id_KEL])->count();
        // $skst = Surat::find()->where(['id_jenis'=> 18 , 'desa'=>$admdesa->id_KEL])->count();
        // $sktmi = Surat::find()->where(['id_jenis'=> 19 , 'desa'=>$admdesa->id_KEL])->count();
        // $sktmii = Surat::find()->where(['id_jenis'=> 20, 'desa'=>$admdesa->id_KEL])->count();
        // $sktmp = Surat::find()->where(['id_jenis'=> 21, 'desa'=>$admdesa->id_KEL])->count();
        // $sktt = Surat::find()->where(['id_jenis'=> 22, 'desa'=>$admdesa->id_KEL])->count();
        // $sku = Surat::find()->where(['id_jenis'=> 23, 'desa'=>$admdesa->id_KEL])->count();
        // $skbse = Surat::find()->where(['id_jenis'=> 24, 'desa'=>$admdesa->id_KEL])->count();
        // $skbeasiswa = Surat::find()->where(['id_jenis'=> 25, 'desa'=>$admdesa->id_KEL])->count();
        // $skmdv = Surat::find()->where(['id_jenis'=> 26, 'desa'=>$admdesa->id_KEL])->count();
        // $skpindah = Surat::find()->where(['id_jenis'=> 27, 'desa'=>$admdesa->id_KEL])->count();
        // $sktditemukan = Surat::find()->where(['id_jenis'=> 28, 'desa'=>$admdesa->id_KEL])->count();
        // $skbk = Surat::find()->where(['id_jenis'=> 29, 'desa'=>$admdesa->id_KEL])->count();    
        // }
        $searchWisata = new DestinasiWisataSearch();
        $dataWisata = $searchWisata->search(Yii::$app->request->queryParams);

        $searchKuliner = new KulinerSearch();
        $dataKuliner = $searchKuliner->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchWisata' => $searchWisata,
            'dataWisata' => $dataWisata,
            'searchKuliner' => $searchKuliner,
            'dataKuliner' => $dataKuliner,
            // 'totalpelanggan' => $penduduk,
            // 'ultah'=>$ultah,
            // 'totalskak'=>$skak,
            // 'totalskawh'=>$skawh,
            // 'totalskawm'=>$skawm,
            // 'totalskb'=>$skb,
            // 'totalskbm'=>$skbm,
            // 'totalskbpr'=>$skbpr,
            // 'totalskd'=>$skd,
            // 'totalskgh'=>$skgh,
            // 'totalskh'=>$skh,
            // 'totalskj'=>$skj,
            // 'totalskk'=>$skk,
            // 'totalskkb'=>$skkb,
            // 'totalskmd'=>$skmd,
            // 'totalskn'=>$skn,
            // 'totalskp'=>$skp,
            // 'totalskpbb'=>$skpbb,
            // 'totalsksk'=>$sksk,
            // 'totalskst'=>$skst,
            // 'totalsktmi'=>$sktmi,
            // 'totalsktmii'=>$sktmii,
            // 'totalsktmp'=>$sktmp,
            // 'totalsktt'=>$sktt,
            // 'totalsku'=>$sku,
            // 'totalskmdv'=>$skmdv,
            // 'totalskbse'=>$skbse,
            // 'totalskpindah'=>$skpindah,
            // 'totalsktditemukan'=>$sktditemukan,
            // 'totalskbeasiswa'=>$skbeasiswa,
            // 'totalskbk'=>$skbk,
            
        ]);
    }
    // public function actionUltah()
    // {
    //     $admdesa = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
    //     if ($admdesa == NULL) {
    //     $tahun = date('Y');
    //     $bulan = date('m');
    //     $hari = date('d');
    //     $searchModel = new UltahuSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //     $dataProvider->query->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1]);
    //     } else {
    //         $tahun = date('Y');
    //     $bulan = date('m');
    //     $hari = date('d');
    //     $searchModel = new UltahuSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //     $dataProvider->query->where(['=', 'DAY(TGL_LHR)', $hari])->andWhere(['=', 'MONTH(TGL_LHR)', $bulan])->andWhere(['STAT_HIDUP'=>1,'NO_KEL'=>$admdesa->id_KEL]);
    //     }
    //     $current_user=Yii::$app->user->id;
    //     Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

    //     return $this->render('ultah', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }
    public function actionCetak($id)
    {
        $model = Ultah::find()->where(['id_penduduk' => $id])->one();
        $cari = Ultah::find()->where(['id_penduduk' => $id ])->one();
        if ($cari != NULL):
        return $this->redirect(['/ultah/print','id'=>$model->ultah_id]);
    else :
            Yii::$app->getSession()->setFlash('warning', 'Anda Tidak Dapat Mencetak Data SPT, Silahkan Menambahkan Data SPT');
            return $this->redirect(['/site/ultah']);
        endif;
    }
    public function actionSkak()
    {
        if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>1]);

        else:
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>1,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skak', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkawh()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>2]);
        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>2,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('skawh', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSkawm()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>3]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->query->andWhere(['id_jenis'=>3,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skawm', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionSkb()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>4]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>4,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skb', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkbm()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>5]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>5,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('skbm', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSkbpr()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>6]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>6,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skbpr', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionSkd()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>7]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>7,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skd', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkgh()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>8]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>8,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skgh', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkh()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>9]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>9,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('skh', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkj()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>10]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>10,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skj', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionSkk()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>11]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>11,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkkb()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>12]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>12,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skkb', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkmd()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>13]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>13,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skmd', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSkn()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>14]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>14,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skn', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkp()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>15]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>15,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skp', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkpbb()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>16]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>16,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('skpbb', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSksk()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>17]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>17,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('sksk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSkst()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>18]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>18,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skst', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSktmi()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>19]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>19,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('sktmi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSktmii()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>20]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>20,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('sktmii', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSktmp()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>21]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>21,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('sktmp', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionSktt()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>22]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>22,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;


        return $this->render('sktt', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSku()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>22]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->query->andWhere(['id_jenis'=>23,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('sku', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkbse()
    {
        if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>24]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>24,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skbse', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionSkbeasiswa()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>25]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>25,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skbeasiswa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionSkmdv()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>26]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>26,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skmdv', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSkpindah()
    {
        
        if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>27]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>27,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skpindah', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    } 
    
    public function actionSktditemukan()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>28]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>28,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('sktditemukan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }    
    public function actionSkbk()
    {
           if (Yii::$app->user->identity->level == 1) :
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>29]);

        else:
     
        $adm = AdmDesa::find()->where(['id_user' => Yii::$app->user->identity->id])->one();
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['id_jenis'=>29,'desa'=>$adm->id_KEL]);
        endif;

        $current_user=Yii::$app->user->id;
        Yii::$app->session['userView'.$current_user.'returnURL']=Yii::$app->request->Url;

        return $this->render('skbk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->login()) {                
            return $this->goBack();
        } else {
            Yii::$app->session->setFlash('failure', "Maaf...<br>User Name atau Password tidak benar.<br>Silahkan coba kembali.");
        }            
        return $this->refresh();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
