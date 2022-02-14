<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kuliner */

// $this->title = 'Update Kuliner: ' . $model->id_kuliner;
$this->title = 'Perbarui Data Kuliner : '.StringHelper::truncateWords(strip_tags($model->nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Kuliner', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kuliner, 'url' => ['view', 'id' => $model->id_kuliner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuliner-update">
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
