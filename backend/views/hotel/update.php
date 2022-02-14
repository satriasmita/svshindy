<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Hotel */

$this->title = 'Update Hotel: ' . $model->hotel_id;
$this->title = 'Perbarui Data Hotel : '.StringHelper::truncateWords(strip_tags($model->h_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hotel_id, 'url' => ['view', 'id' => $model->hotel_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hotel-update">
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
