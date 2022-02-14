<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Masjid */

// $this->title = 'Update Masjid: ' . $model->m_id;
$this->title = 'Perbarui Data Destinasi Wisata : '.StringHelper::truncateWords(strip_tags($model->m_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Masjid', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->m_id, 'url' => ['view', 'id' => $model->m_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="masjid-update">
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
