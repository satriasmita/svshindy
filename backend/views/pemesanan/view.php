<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Pemesanan */

// $this->title = $model->pemesanan_id;

$this->params['breadcrumbs'][] = ['label' => 'Pemesanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pemesanan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pemesanan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pemesanan_id',
            'pemesanan_hotel_id',
            'pemesanan_checkin',
            'pemesanan_durasi',
            'pemesanan_tamu_dewasa',
            'pemesanan_tamu_anak',
            'pemesanan_jumlah_kamar',
            'pemesanan_total',
            'pemesanan_nama',
            'pemesanan_notelp',
            'pemesanan_email:email',
            'pemesanan_status',
        ],
    ]) ?>

</div>
