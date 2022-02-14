<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */

$this->title = 'Update Pemesanan: ' . $model->pemesanan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pemesanan_id, 'url' => ['view', 'id' => $model->pemesanan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('update', [
        'model' => $model,
    ]) ?>

</div>
