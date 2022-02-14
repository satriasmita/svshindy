<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Warga */

$this->title = $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Registrasi Akun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-view">
    <div class="box box-solid box-info">
        <div class="box-header">
            <center><h3 class="box-title">Detail Data Registrasi Akun</h3></center>
            <div class="box-tools pull-right">
                <?= Html::a('<i class="fa fa-fw fa-trash"></i>Hapus', ['delete', 'id' => $model->wargaid], ['class' => 'btn btn-danger','data' => ['confirm' => 'Anda Yakin Ingin Menghapus Data Ini?', 'method' => 'post',],]) ?>
            </div>
         </div>

<div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'wargaid',
            [
                    'attribute' => 'nik',
                    'label' => 'NIK',
                ],
            [
                    'attribute' => 'nama',
                    'label' => 'Nama Lengkap',
                ],
            'tempat_lahir',
            [
                    'attribute' => 'tgl_lahir',
                    'label' => 'Tanggal Lahir',
                ],
            [
                    'attribute' => 'jk0.nama_jk',
                    'label' => 'Jenis Kelamin',
                ],
                [
                    'attribute' => 'no_hp',
                    'label' => 'No. HP',
                ],
            'alamat',
            [
                    'attribute' => 'agama0.nama_agama',
                    'label' => 'Agama',
                ],
            [
                    'attribute' => 'status0.nama_stat_nik',
                    'label' => 'Status Kawin',
                ],
            [
                    'attribute' => 'pendidikan0.nama_pen',
                    'label' => 'Pendidikan',
                ],
            'pekerjaan',
            // 'foto',
            [
                    'attribute' => 'foto',
                    'label' => 'KTP',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/upload/reg/ktp/'. $data['foto'],
                            ['height' => '200px']);
                    },
                ],
            // 'foto2',
            [
                    'attribute' => 'foto2',
                    'label' => 'KK',
                    'contentOptions'=>['style'=>'text-align: left;'],
                    'format' => 'html',    
                    'filter'=> false,
                    'value' => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/upload/reg/kk/'. $data['foto2'],
                            ['height' => '200px']);
                    },
                ],
            'info',
            [
                    'attribute' => 'desa0.nama_desa',
                    'label' => 'Desa',
                ],
        ],
    ]) ?>
<div class="box-body">
            <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
</div>
</div></div></div>
