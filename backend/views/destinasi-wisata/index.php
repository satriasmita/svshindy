<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DestinasiWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Destinasi Wisata';
$this->params['breadcrumbs'][] = $this->title;

$tombol = '{view} {update} {delete}';
?>
<div class="destinasi-wisata-index">
<div class="box box-solid box-info">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-plus-square"></i><b>Tambah ' .Html::encode($this->title).'</b>', ['create'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <div class="box-body">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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
            [
                    'attribute' => 'foto',
                    'label' => 'Foto',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto'],
                            ['height' => '150px']);
                    },
            ],
            [
                    'attribute' => 'tahun',
                    'label' => 'Tahun',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => 'tahun',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Tahun..'
                     ]
                ],
            [
                    'attribute' => 'status',
                    'filter'=>array('1' => 'Publish', '2' => 'Tidak Publish'),
                    'filterInputOptions' => [
                       'class' => 'form-control',         
                       'prompt' => 'Pilih Status'
                    ],
                    'value' => function($model){
                        return ($model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''));
                    },
                    'format' => 'html'
                ],
            

            [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:190px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['view','id'=>$key], [
                                'aria-label' => 'Lihat Detail',
                                'title'=>'Lihat Detail',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['update','id'=>$key], [
                                'aria-label' => 'Perbarui',
                                'title'=>'Perbarui',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key], [
                                'aria-label' => 'Hapus',
                                'title'=>'Hapus',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
</div>
