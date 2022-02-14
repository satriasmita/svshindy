<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kerajinan */

$this->title = $model->kerajinan_id;
$this->params['breadcrumbs'][] = ['label' => 'Kerajinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kerajinan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kerajinan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kerajinan_id], [
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
            'kerajinan_id',
            'kerajinan_jenis',
            'kerajinan_usaha',
            'kerajinan_pemilik',
            'kerajinan_alamat',
            'kerajinan_telepon',
            'kerajinan_keterangan',
            'tahun',
            'status',
        ],
    ]) ?>

</div>
