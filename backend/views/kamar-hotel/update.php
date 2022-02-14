<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KamarHotel */

$this->title = 'Perbarui Data Kamar Hotel: ' . $model->kh_id;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kh_id, 'url' => ['view', 'id' => $model->kh_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-hotel-update">
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
