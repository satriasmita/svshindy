<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Hotel;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasKamarHotel */

$this->title = $model->fkh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Kamar Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fasilitas-kamar-hotel-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->fkh_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->fkh_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fkh_id',
            // 'kh_id',
            [
                'attribute' => 'hotel.h_nama',
                'label' => 'Nama Hotel',
            ],
            [
                'attribute' => 'fkh_balkon',
                'value' => $model->fkh_balkon == 1 ? 'Tersedia' : ($model->fkh_balkon == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_coffe_maker',
                'value' => $model->fkh_coffe_maker == 1 ? 'Tersedia' : ($model->fkh_coffe_maker == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_hot_water',
                'value' => $model->fkh_hot_water == 1 ? 'Tersedia' : ($model->fkh_hot_water == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_wifi',
                'value' => $model->fkh_wifi == 1 ? 'Tersedia' : ($model->fkh_wifi == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_sarapan',
                'value' => $model->fkh_sarapan == 1 ? 'Tersedia' : ($model->fkh_sarapan == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_shower',
                'value' => $model->fkh_shower == 1 ? 'Tersedia' : ($model->fkh_shower == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_tv',
                'value' => $model->fkh_tv == 1 ? 'Tersedia' : ($model->fkh_tv == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fkh_kulkas',
                'value' => $model->fkh_kulkas == 1 ? 'Tersedia' : ($model->fkh_kulkas == 2 ? '-' : ''),
            ],
            // 'fkh_coffe_maker',
            // 'fkh_ac',
            // 'fkh_hot_water',
            // 'fkh_wifi',
            // 'fkh_sarapan',
            // 'fkh_shower',
            // 'fkh_tv',
            // 'fkh_kulkas',
        ],
    ]) ?>
<div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
