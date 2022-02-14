<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Berita */

$this->title = 'Berita : '.StringHelper::truncateWords(strip_tags($model->berita_judul),5);
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="berita-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->berita_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->berita_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th style ="width : 20%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            // 'berita_id',
            // 'berita_foto:ntext',
            'berita_judul:ntext',
            [
                    'attribute'=>'berita_tanggal',
                    'format' => 'html',
                    'value' => function ($data){
                        return $data->tanggalIndo($data->berita_tanggal) ;
                    },
            ],
            // 'berita_status',
            [
                    'attribute'=>'berita_status',
                    'value' => $model->berita_status == 1 ? 'Publish' : ($model->berita_status == 2 ? 'Tidak Publish' : ''),
            ],
            [
                    'attribute' => 'berita_foto',
                    'label' => 'Foto',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Berita/'. $data['berita_foto'],
                            ['height' => '200px']);
                    },
            ],
            'berita_isi:html',
            // 'berita_tanggal',
            
        ],
    ]) ?>
</div>
</div>
</div>
</div>

