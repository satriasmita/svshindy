<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\KamarHotel */

$this->title = $model->kh_id;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kamar-hotel-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->kh_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->kh_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'kh_id',
            // 'kh_hotel',
            [
                'attribute' => 'hotel.h_nama',
                'label' => 'Nama Hotel',
            ],
            // 'kh_nama',
            [
                'attribute'=>'kh_nama',
                'value'=> $model->kh_nama == 1 ? 'Standar Room' : ($model->kh_nama == 2 ? 'Superior Room' : ($model->kh_nama == 3 ? 'Deluxe Room' : ($model->kh_nama == 4 ? 'Junior Sweet Room' : ($model->kh_nama == 5 ? 'Sweet Room' : ($model->kh_nama == 6 ? 'Presidental Suit' : ''))))),
            ],
            
            'kh_luas_kamar',
            [
                'attribute'=>'kh_jenis_bed',
                'value'=> $model->kh_jenis_bed == 1 ? 'Single Room' : ($model->kh_jenis_bed == 2 ? 'Twin Room' : ($model->kh_jenis_bed == 3 ? 'Double Room' : ($model->kh_jenis_bed == 4 ? 'Triple Room' : ''))),
            ],
            // 'kh_nama',
            
            'kh_harga',
            'kh_sisa_kamar',
            'kh_jumlah_tamu',
        ],
    ]) ?>
    <div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
