<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $model backend\models\Restoran */

// $this->title = $model->restoran_id;
$this->title = 'Nama Restoran : '.StringHelper::truncateWords(strip_tags($model->restoran_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Restorans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="restoran-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->restoran_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->restoran_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th style ="width : 20%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            // 'restoran_id',
            'restoran_nama',
            'restoran_alamat:ntext',
            'restoran_telepon',
            [
                    'attribute'=>'status',
                    'value' => $model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''),
                ],
            'restoran_detail:ntext',
            // 'restoran_photo',
            [
                    'attribute' => 'restoran_photo',
                    'label' => 'Foto',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Restoran/'. $data['restoran_photo'],
                            ['height' => '200px']);
                    },
            ],
            'restoran_pemilik',
            'restoran_latitude',
            'restoran_longitude',
        ],
    ]) ?>
</div>
