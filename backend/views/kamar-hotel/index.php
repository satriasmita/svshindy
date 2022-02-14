<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Hotel;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\KamarHotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kamar Hotel';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';
?>
<div class="kamar-hotel-index">
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

            [
                'attribute' => 'kh_hotel',
                'label' => 'Nama Hotel',
                'value' =>'hotel.h_nama',
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'options' => ['placeholder' => 'Hotel...',],
                    'pluginOptions' => ['allowClear' => true],
                    'attribute' => 'hotel',
                    'data' => ArrayHelper::map(Hotel::find()->all(), 'hotel_id', 'h_nama')
                    ]),
            ],
            
            [
                'attribute'=>'kh_nama',
                'value' => function ($data){
                    if ($data->kh_nama == 1) {
                    return "Standar Room";}
                    if ($data->kh_nama == 2) {
                        return "Superior Room";}
                        if ($data->kh_nama == 3) {
                            return "Deluxe Room";}
                            if ($data->kh_nama == 4) {
                                return "Junior Sweet Room";}
                                if ($data->kh_nama == 5) {
                                    return "Sweet Room";}
                    else {return "Presidental Suit";}
            }
            ],
            'kh_luas_kamar',
            // 'kh_jenis_bed',
            [
                'attribute'=>'kh_jenis_bed',
                'value' => function ($data){
                    if ($data->kh_jenis_bed == 1) {
                    return "Single Room";}
                    if ($data->kh_jenis_bed == 2) {
                        return "Twin Room";}
                        if ($data->kh_jenis_bed == 3) {
                            return "Double Room";}
                    else {return "Triple Room";}
            }
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
