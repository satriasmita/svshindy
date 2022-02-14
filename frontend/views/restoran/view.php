<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Restoran */

$this->title = $model->restoran_id;
$this->params['breadcrumbs'][] = ['label' => 'Restorans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="restoran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->restoran_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->restoran_id], [
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
            'restoran_id',
            'restoran_nama',
            'restoran_alamat:ntext',
            'restoran_telepon',
            'restoran_detail:ntext',
            'restoran_photo',
            'restoran_pemilik',
            'restoran_latitude',
            'restoran_longitude',
            'tahun',
            'status',
        ],
    ]) ?>

</div>
