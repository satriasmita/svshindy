<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $model backend\models\Atm */

// $this->title = 'Update Atm: ' . $model->atm_id;
$this->title = 'Perbarui Data ATM : '.StringHelper::truncateWords(strip_tags($model->atm_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Atm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->atm_id, 'url' => ['view', 'id' => $model->atm_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atm-update">
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
