<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KerajinanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oleh-oleh';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="kerajinan-index">
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

            // 'kerajinan_id',
            // 'kerajinan_jenis',
            // [ 
            //     'attribute' => 'kerajinan_jenis',
            //     'filter'=>array('1' => 'KERAJINAN BERBASIS TEMPURUNG, KAYU DAN KERANG', '2' => 'KERAJINAN SULAIMAN', '3' => 'KERAJINAN RAJUTAN', '4' => 'MAKANAN'),
            //     'filterInputOptions' => [
            //        'class' => 'form-control',         
            //        'prompt' => 'Pilih Jenis'
            //     ],
            //     'value' => function($model){
            //         $stat = $model->getstatusLabel();
            //         return Html::tag(
            //             'span', $stat['kerajinan_jenis'], ['class' => $stat['class']]
            //         );
            //     },
            //     'format' => 'html'
            // ],

            [
                'attribute'=>'kerajinan_jenis',
                'value' => function ($data){
                    if ($data->kerajinan_jenis == 1) {
                    return "KERAJINAN BERBASIS TEMPURUNG, KAYU DAN KERANG";}
                    if ($data->kerajinan_jenis == 2) {
                        return "KERAJINAN SULAIMAN";}
                        if ($data->kerajinan_jenis == 3) {
                            return "KERAJINAN RAJUTAN";}
                    else {return "MAKANAN";}
            }
            ],
            'kerajinan_usaha',
            'kerajinan_pemilik',
            'kerajinan_alamat',
            'kerajinan_telepon',
            //'kerajinan_keterangan',

            // ['class' => 'yii\grid\ActionColumn'],
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
