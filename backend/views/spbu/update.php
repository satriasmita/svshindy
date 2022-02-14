<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Spbu */

// $this->title = 'Update Spbu: ' . $model->spbu_id;
$this->title = 'Perbarui Data Destinasi Wisata : '.StringHelper::truncateWords(strip_tags($model->spbu_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'SPBU', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->spbu_id, 'url' => ['view', 'id' => $model->spbu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spbu-update">
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
