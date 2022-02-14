<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParkirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parkir';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="parkir-index">
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

            // 'p_id',
            // 'p_nama',
            [
                    'attribute' => 'p_nama',
                    'contentOptions'=>['style'=>'max-width: 10%;white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->p_nama), 20);
                        },
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Nama Parkir..'
                     ]
            ],
            // 'p_alamat:ntext',
            [
                    'attribute' => 'p_alamat',
                    'contentOptions'=>['style'=>'white-space: normal;'],
                    'value' => function($model){
                            return StringHelper::truncateWords(strip_tags($model->p_alamat), 10);
                        },
                    'format' => 'html',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'Cari Alamat..'
                     ]
            ],
            'p_latitude',
            'p_longitude',

            // ['class' => 'yii\grid\ActionColumn'],

            [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:190px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['view','id'=>$key], [
                                'aria-label' => 'Lihat Detail Parkir',
                                'title'=>'Lihat Detail Parkir',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['update','id'=>$key], [
                                'aria-label' => 'Perbarui Parkir',
                                'title'=>'Perbarui Parkir',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key], [
                                'aria-label' => 'Hapus Parkir',
                                'title'=>'Hapus Parkir',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                        'publish' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-check-square-o"></i>', ['publish','id'=>$key], [
                                'aria-label' => 'Publish Parkir',
                                'title'=>'Publish Parkir',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-info',
                                'data-confirm'=>'Apakah Anda Ingin Publish Parkir Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
</div>
