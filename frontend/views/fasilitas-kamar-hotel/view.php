<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasKamarHotel */

$this->title = $model->fkh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Kamar Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fasilitas-kamar-hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fkh_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fkh_id], [
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
            'fkh_id',
            'kh_id',
            'fkh_balkon',
            'fkh_coffe_maker',
            'fkh_ac',
            'fkh_hot_water',
            'fkh_wifi',
            'fkh_sarapan',
            'fkh_shower',
            'fkh_tv',
            'fkh_kulkas',
        ],
    ]) ?>

</div>
