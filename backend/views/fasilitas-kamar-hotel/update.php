<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasKamarHotel */

$this->title = 'Update Fasilitas Kamar Hotel: ' . $model->fkh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Kamar Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fkh_id, 'url' => ['view', 'id' => $model->fkh_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fasilitas-kamar-hotel-update">
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
