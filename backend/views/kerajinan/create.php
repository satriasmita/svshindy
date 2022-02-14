<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kerajinan */

$this->title = 'Tambah Data Oleh-oleh';
$this->params['breadcrumbs'][] = ['label' => 'Oleh-oleh', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kerajinan-create">
<div class="box box-solid box-success">
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
