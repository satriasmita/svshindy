<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriBed */

$this->title = 'Update Kategori Bed: ' . $model->id_bed;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Beds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bed, 'url' => ['view', 'id' => $model->id_bed]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-bed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
