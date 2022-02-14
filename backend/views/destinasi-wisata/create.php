<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinasiWisata */

$this->title = 'Tambah Data Destinasi Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Destinasi Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destinasi-wisata-create">
<div class="box box-solid box-success">
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
