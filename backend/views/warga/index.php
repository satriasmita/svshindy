<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrasi Akun';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-index">
    <div class="box box-solid box-info">
        <div class="box-header">
            <center><h3 class="box-title">Data <?= Html::encode($this->title) ?></h3></center>
            <div class="box-tools pull-right">
              <!-- <?= Html::a('<i class="fa fa-fw fa-plus-square"></i><b>Tambah Data</b>', ['create'], ['class' => 'btn btn-primary']) ?> -->
             </div>
        </div>

<div class="box-body">
<div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                    'attribute' => 'agama',
                    'label' => 'Agama',
                    'value' =>'agama0.nama_agama',
                ],
            [
                    'attribute' => 'pendidikan',
                    'label' => 'Pendidikan',
                    'value' => 'pendidikan0.nama_pen',
                ],
            'info',
            // 'fdesa',
            //'jk',
            //'alamat',
            //'agama',
            //'status',
            //'pekerjaan',
            //'foto',
            //'foto2',
            //'no_hp',
            //'info',
            // ['class' => 'yii\grid\ActionColumn'],
            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {delete}',
                ],
        ],
    ]); ?>
</div>
</div></div></div>