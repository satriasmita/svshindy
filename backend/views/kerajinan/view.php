<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Kerajinan */

// $this->title = $model->kerajinan_id;
$this->title = 'Jenis Usaha : '.StringHelper::truncateWords(strip_tags($model->kerajinan_usaha), 5);
$this->params['breadcrumbs'][] = ['label' => 'Kerajinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kerajinan-view">
<div class="box box-solid box-warning">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-pencil-square"></i>Perbarui', ['update', 'id' => $model->kerajinan_id], ['class' => 'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->kerajinan_id], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
        </div>
        <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'kerajinan_id',
            [
                'attribute'=>'kerajinan_jenis',
                'value'=> $model->kerajinan_jenis == 1 ? 'KERAJINAN BERBASIS TEMPURUNG, KAYU DAN KERANG' : ($model->kerajinan_jenis == 2 ? 'KERAJINAN SULAIMAN' : ($model->kerajinan_jenis == 3 ? 'KERAJINAN RAJUTAN' : ($model->kerajinan_jenis == 4 ? 'MAKANAN' : ''))),
            ],
            [
                    'attribute'=>'status',
                    'value' => $model->status == 1 ? 'Publish' : ($model->status == 2 ? 'Tidak Publish' : ''),
                ],
            'kerajinan_usaha',
            'kerajinan_pemilik',
            'kerajinan_alamat',
            'kerajinan_telepon',
            'kerajinan_keterangan',
        ],
    ]) ?>
<div class="form-group">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
        </div>
    </div>
</div>
</div>
