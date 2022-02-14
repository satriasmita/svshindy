<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinasiWisata */

// $this->title = $model->id_destinasi;
$this->title = 'Destinasi Wisata : '.StringHelper::truncateWords(strip_tags($model->nama_destinasi), 5);
$this->params['breadcrumbs'][] = ['label' => 'Destinasi Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="destinasi-wisata-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->id_destinasi], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->id_destinasi], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,        
        'template' => '<tr><th style ="width : 20%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            // 'id_destinasi',
            'nama_destinasi',
            'detail:html',
            'keunggulan',
            'fasilitas',
            'alamat',
            'latitude',
            'longitude',
            [
                    'attribute'=>'status',
                    'value' => $model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''),
                ],
            // 'foto',
            [
                    'attribute' => 'foto',
                    'label' => 'Foto 1',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto'],
                            ['height' => '200px']);
                    },
            ],
            // 'foto2',
            [
                    'attribute' => 'foto2',
                    'label' => 'Foto 2',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto2'],
                            ['height' => '200px']);
                    },
            ],
            // 'foto3',
            [
                    'attribute' => 'foto3',
                    'label' => 'Foto 3',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto3'],
                            ['height' => '200px']);
                    },
            ],
            // 'foto4',
            [
                    'attribute' => 'foto4',
                    'label' => 'Foto 4',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Wisata/'. $data['foto4'],
                            ['height' => '200px']);
                    },
            ],
        ],
    ]) ?>
    <div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
