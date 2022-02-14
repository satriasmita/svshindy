<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Akses */

$this->title = 'Update Akses: ' . $model->akses_id;
$this->params['breadcrumbs'][] = ['label' => 'Akses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->akses_id, 'url' => ['view', 'id' => $model->akses_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
