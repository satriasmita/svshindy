<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use backend\models\Posts;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var this yii\web\View */

$this->title = 'Welcome to Sharing Vision';

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
            <h3 class="box-title">Data Postingan</h3>
           
        </div>
        <div class="box-body">
        <?= GridView::widget([
        'dataProvider' => $dataPos,
        'filterModel' => $searchPos,
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
</div>

    </div> 
</div>
</div>