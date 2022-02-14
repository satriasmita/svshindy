<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kerajinan */

$this->title = 'Perbarui Data Kerajinan: ' . $model->kerajinan_id;
$this->params['breadcrumbs'][] = ['label' => 'Kerajinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kerajinan_id, 'url' => ['view', 'id' => $model->kerajinan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kerajinan-update">
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
