<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinasiWisata */

// $this->title = 'Perbarui Data Destinasi Wisata: ' . $model->id_destinasi;
$this->title = 'Perbarui Data Destinasi Wisata : '.StringHelper::truncateWords(strip_tags($model->nama_destinasi), 5);
$this->params['breadcrumbs'][] = ['label' => 'Destinasi Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_destinasi, 'url' => ['view', 'id' => $model->id_destinasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="destinasi-wisata-update">
<div class="box box-solid box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>

	    <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
</div>
