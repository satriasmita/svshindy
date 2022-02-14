<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanan';
$this->params['breadcrumbs'][] = $this->title;
$tombol = '{view} {update} {delete}';

?>
<div class="pemesanan-index">
<div class="box box-solid box-info">
    <div class="box-header">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        <div class="box-tools pull-right">
            <?= Html::a('<i class="fa fa-fw fa-plus-square"></i><b>Tambah ' .Html::encode($this->title).'</b>', ['create'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pemesanan_id',
            'pemesanan_hotel_id',
            'pemesanan_checkin',
            'pemesanan_durasi',
            'pemesanan_tamu_dewasa',
            //'pemesanan_tamu_anak',
            //'pemesanan_jumlah_kamar',
            //'pemesanan_total',
            //'pemesanan_nama',
            //'pemesanan_notelp',
            //'pemesanan_email:email',
            //'pemesanan_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
    
</div>
