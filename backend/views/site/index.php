<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use backend\models\Pekerjaan;
use backend\models\User;
use backend\models\DestinasiWisata;
use backend\models\Kuliner;
use backend\models\Pegawai;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var this yii\web\View */

$this->title = 'Selamat Datang di Halaman Aplikasi TripAdvisor Kota Pariaman';

$tombol = '{view}';
?>
<style type="text/css">
    marquee p
{
    white-space:nowrap;
}
table, th, td {
   border: 1px solid;
}
</style>

<div class="site-index">
  <div class="box box-solid box-success">
        <div class="box-header">
            <h3 class="box-title">Data Destinasi Wisata Kota Pariaman</h3>
            <!-- <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-plus-square"></i><b>Tambah Destinasi Wisata</b>', ['/destinasi-wisata/create'], ['class' => 'btn btn-primary']) ?>
            </div> -->
        </div>
        <div class="box-body">
          <?= GridView::widget([
        'dataProvider' => $dataWisata,
        'filterModel' => $searchWisata,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_destinasi',
            // 'nama_destinasi',
            [
                    'attribute' => 'nama_destinasi',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->nama_destinasi), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Destinasi..'
                     ]
                ],
            // 'detail:html',
            [
                    'attribute' => 'detail',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->detail), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Detail..'
                     ]
            ],
            // 'longitude',
            // 'latitude',
            [
                    'attribute' => 'foto',
                    'label' => 'Foto ',
                    'contentOptions'=>['style'=>'text-align: center;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto'],
                            ['height' => '100px']);
                    },
            ],
            [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:70px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['/destinasi-wisata/view','id'=>$key], [
                                'aria-label' => 'Lihat Detail',
                                'title'=>'Lihat Detail',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
    </div> 
</div>

<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title">Data Kuliner Kota Pariaman</h3>
        </div>
        <div class="box-body">
          <?= GridView::widget([
        'dataProvider' => $dataKuliner,
        'filterModel' => $searchKuliner,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_destinasi',
            // 'nama_destinasi',
            [
                    'attribute' => 'nama',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->nama), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Nama Kuliner..'
                     ]
                ],
            // 'detail:html',
            [
                    'attribute' => 'keterangan',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->keterangan), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Keterangan..'
                     ]
            ],
            // 'longitude',
            // 'latitude',
            [
                    'attribute' => 'foto',
                    'label' => 'Foto ',
                    'contentOptions'=>['style'=>'text-align: center;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Kuliner/'. $data['foto'],
                            ['height' => '100px']);
                    },
            ],
            [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:70px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['/kuliner/view','id'=>$key], [
                                'aria-label' => 'Lihat Detail',
                                'title'=>'Lihat Detail',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
    </div> 
</div>
</div>