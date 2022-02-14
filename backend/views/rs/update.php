<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Rs */

$this->title = 'Perbarui Data Rumah Sakit : '.StringHelper::truncateWords(strip_tags($model->rs_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Rumah Sakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rs_id, 'url' => ['view', 'id' => $model->rs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-update">
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
