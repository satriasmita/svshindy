<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Berita */

$this->title = 'Perbarui Data Berita: ' .StringHelper::truncateWords(strip_tags($model->berita_judul), 5);
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->berita_id, 'url' => ['view', 'id' => $model->berita_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berita-update">
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
