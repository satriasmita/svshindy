<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Hotel */

// $this->title = 'Data Hotel';
$this->title = 'Nama Hotel : '.StringHelper::truncateWords(strip_tags($model->h_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hotel-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->hotel_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->hotel_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'hotel_id',
            'h_nama',
            'h_alamat:ntext',
            'h_telp',
            // 'foto',
            [
                'attribute' => 'foto',
                'label' => 'Foto',
                'contentOptions'=>['style'=>'text-align: left;'],
                'format' => 'html',    
                'filter'=> false,
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/Hotel/'. $data['foto'],
                        ['height' => '200px']);
                },
        ],
        [
            'attribute' => 'foto2',
            'label' => '',
            'contentOptions'=>['style'=>'text-align: left;'],
            'format' => 'html',    
            'filter'=> false,
            'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/images/Hotel/'. $data['foto2'],
                    ['height' => '200px']);
            },
        ],
        [
            'attribute' => 'foto3',
            'label' => '',
            'contentOptions'=>['style'=>'text-align: left;'],
            'format' => 'html',    
            'filter'=> false,
            'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/images/Hotel/'. $data['foto3'],
                    ['height' => '200px']);
            },
        ],
        [
            'attribute' => 'foto4',
            'label' => '',
            'contentOptions'=>['style'=>'text-align: left;'],
            'format' => 'html',    
            'filter'=> false,
            'value' => function ($data) {
                return Html::img(Yii::getAlias('@web').'/images/Hotel/'. $data['foto4'],
                    ['height' => '200px']);
            },
        ],

            // 'foto2',
            // 'foto3',
            // 'foto4',
            'h_latitude',
            'h_longitude',
        ],
    ]) ?>
<div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
