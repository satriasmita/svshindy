<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="posts-index">
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

            'id',
            'title',
            'content:ntext',
            'category',
            'created_date',
            //'update_date',
            //'status',

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
