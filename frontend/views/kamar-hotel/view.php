<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model frontend\models\KamarHotel */

$this->title = $model->kh_id;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kamar-hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kh_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kh_id], [
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
            'kh_id',
            'kh_hotel',
            'kh_nama',
            'kh_luas_kamar',
            'kh_jenis_bed',
            'kh_harga',
            'kh_sisa_kamar',
            'kh_jumlah_tamu',
        ],
    ]) ?>

</div>
