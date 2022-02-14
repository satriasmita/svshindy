<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AgendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agenda';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="agenda-index">
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

            // 'agenda_id',
            // 'agenda_nama',
            [
                    'attribute' => 'agenda_nama',
                    'contentOptions'=>['style'=>'max-width: 10%;white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->agenda_nama), 10);
                        },
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Nama Agenda..'
                     ]
            ],
            // 'agenda_isi:html',
            [
                    'attribute' => 'agenda_isi',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->agenda_isi), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Detail..'
                     ]
            ],
            [
                    'attribute' => 'agenda_lokasi',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->agenda_lokasi), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Detail..'
                     ]
            ],
            // 'agenda_lokasi:ntext',
            // 'agenda_mulai',
            [
                    'attribute'=>'agenda_mulai',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'format' => 'html',
                    'value' => function ($data){
                        return $data->tanggalIndo($data->agenda_mulai) ;
                    },
                    'filter'=>DatePicker::widget([
                    'language' => 'id',
                    'model' => $searchModel,
                    'options' => ['placeholder' => 'Pilih Tanggal Agenda'],
                    'attribute'=>'agenda_mulai',
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ])       
                ],
            //'agenda_selesai',
            //'agenda_photoid',
            //'agenda_latitude',
            //'agenda_longitude',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:190px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['view','id'=>$key], [
                                'aria-label' => 'Lihat Detail Agenda',
                                'title'=>'Lihat Detail Agenda',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['update','id'=>$key], [
                                'aria-label' => 'Perbarui Agenda',
                                'title'=>'Perbarui Agenda',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key], [
                                'aria-label' => 'Hapus Agenda',
                                'title'=>'Hapus Agenda',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                        'publish' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-check-square-o"></i>', ['publish','id'=>$key], [
                                'aria-label' => 'Publish Agenda',
                                'title'=>'Publish Agenda',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-info',
                                'data-confirm'=>'Apakah Anda Ingin Publish Agenda Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
</div>
