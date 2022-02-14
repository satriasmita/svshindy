<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Restoran */

$this->title = 'Perbarui Data Restoran : '.StringHelper::truncateWords(strip_tags($model->restoran_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Restoran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => StringHelper::truncateWords(strip_tags($model->restoran_nama), 5), 'url' => ['view', 'id' => $model->restoran_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restoran-update">
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
