<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KamarHotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kamar Hotels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-hotel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kamar Hotel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kh_id',
            'kh_hotel',
            'kh_nama',
            'kh_luas_kamar',
            'kh_jenis_bed',
            //'kh_harga',
            //'kh_sisa_kamar',
            //'kh_jumlah_tamu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
