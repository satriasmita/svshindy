<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasHotel */

$this->title = 'Perbarui Data Fasilitas Hotel: ' . $model->fh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Hotel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fh_id, 'url' => ['view', 'id' => $model->fh_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fasilitas-hotel-update">
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
