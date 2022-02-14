<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Map */

$this->title = 'Update Map: ' . $model->idmap;
$this->params['breadcrumbs'][] = ['label' => 'Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmap, 'url' => ['view', 'id' => $model->idmap]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="map-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
