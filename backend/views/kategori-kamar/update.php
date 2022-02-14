<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriKamar */

$this->title = 'Update Kategori Kamar: ' . $model->id_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kamar, 'url' => ['view', 'id' => $model->id_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
