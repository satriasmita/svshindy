<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kuliner */

// $this->title = $model->id_kuliner;
$this->title = 'Nama Kuliner : '.StringHelper::truncateWords(strip_tags($model->nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Kuliner', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kuliner-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->id_kuliner], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->id_kuliner], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th style ="width : 20%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            'id_kuliner',
            'nama',
             [
                    'attribute'=>'status',
                    'value' => $model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''),
                ],
            // 'foto',
            [
                    'attribute' => 'foto',
                    'label' => 'Foto',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Kuliner/'. $data['foto'],
                            ['height' => '200px']);
                    },
            ],
            'keterangan:html',
        ],
    ]) ?>

</div>
