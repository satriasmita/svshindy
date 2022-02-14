<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasHotel */

$this->title = $model->fh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fasilitas-hotel-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->fh_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->fh_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'fh_id',
            // 'fh_hotel',
            [
                'attribute' => 'hotel.h_nama',
                'label' => 'Nama Hotel',
            ],
            // 'fh_ac',
            [
                'attribute' => 'fh_ac',
                'value' => $model->fh_ac == 1 ? 'Tersedia' : ($model->fh_ac == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fh_kolam_renang',
                'value' => $model->fh_kolam_renang == 1 ? 'Tersedia' : ($model->fh_kolam_renang == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fh_tempat_parkir',
                'value' => $model->fh_tempat_parkir == 1 ? 'Tersedia' : ($model->fh_tempat_parkir == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fh_wifi',
                'value' => $model->fh_wifi == 1 ? 'Tersedia' : ($model->fh_wifi == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fh_restorant',
                'value' => $model->fh_restorant == 1 ? 'Tersedia' : ($model->fh_restorant == 2 ? '-' : ''),
            ],
            [
                'attribute' => 'fh_resepsionis',
                'value' => $model->fh_resepsionis == 1 ? 'Tersedia' : ($model->fh_resepsionis == 2 ? '-' : ''),
            ],
            // 'fh_kolam_renang',
            // 'fh_tempat_parkir',
            // 'fh_wifi',
            // 'fh_restorant',
            // 'fh_resepsionis',
        ],
    ]) ?>
    <div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
