<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */

// $this->title = $model->agenda_id;
$this->title = 'Agenda : '.StringHelper::truncateWords(strip_tags($model->agenda_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="agenda-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->agenda_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->agenda_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'agenda_id',
            'agenda_nama',
            'agenda_isi:html',
            'agenda_lokasi:ntext',
            [
                    'attribute'=>'status',
                    'value' => $model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''),
                ],
            // 'agenda_mulai',
            [
                    'attribute'=>'agenda_mulai',
                    'format' => 'html',
                    'value' => function ($data){
                        return $data->tanggalIndo($data->agenda_mulai) ;
                    },
            ],
            [
                    'attribute'=>'agenda_selesai',
                    'format' => 'html',
                    'value' => function ($data){
                        return $data->tanggalIndo($data->agenda_selesai) ;
                    },
            ],
            // 'agenda_selesai',
            // 'agenda_photoid',
            [
                    'attribute' => 'agenda_photoid',
                    'label' => 'Foto',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/images/Agenda/'. $data['agenda_photoid'],
                            ['height' => '200px']);
                    },
            ],
            'agenda_latitude',
            'agenda_longitude',
        ],
    ]) ?>
</div>
</div>
</div>
</div>
