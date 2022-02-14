<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AksesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akses';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="akses-index">
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

            // 'akses_id',
            'akses_destinasi',
            'akses_transportasi',
            'akses_distance',

           [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions'=>['style'=>'white-space: normal;width:190px;'],
                    'header' => 'Aksi',
                    'template' => $tombol,
                    'buttons' => [
                        'view' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-search"></i>', ['view','id'=>$key], [
                                'aria-label' => 'Lihat Detail Akses',
                                'title'=>'Lihat Detail Akses',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-success', 
                                ]);
                        },
                        'update' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-pencil"></i>', ['update','id'=>$key], [
                                'aria-label' => 'Perbarui Akses',
                                'title'=>'Perbarui Akses',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-primary', 
                                ]);
                        },
                        'delete' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-trash"></i>', ['delete','id'=>$key], [
                                'aria-label' => 'Hapus Akses',
                                'title'=>'Hapus Akses',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-danger',
                                'data-confirm'=>'Apakah Anda Ingin Menghapus Data Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                        'publish' => function ($url, $model, $key){
                            return Html::a('<i class="fa fa-check-square-o"></i>', ['publish','id'=>$key], [
                                'aria-label' => 'Publish Akses',
                                'title'=>'Publish Akses',
                                'style'=>'height:35px;width:40px;margin-bottom:5px;', 
                                'class' => 'btn btn-info',
                                'data-confirm'=>'Apakah Anda Ingin Publish Akses Ini?',
                                'data-method'=>'post',
                                ]);
                        },
                    ]
                ],
        ],
    ]); ?>
</div>
