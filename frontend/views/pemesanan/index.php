<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pemesanan_id',
            'pemesan_hotel_id',
            'pemesanan_checkin',
            'pemesanan_durasi',
            'pemesanan_tamu_dewasa',
            //'pemesanan_tamu_anak',
            //'pemesanan_jumlah_kamar',
            //'pemesanan_nama',
            //'pemesanan_notelp',
            //'pemesanan_email:email',
            //'pemesanan_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
