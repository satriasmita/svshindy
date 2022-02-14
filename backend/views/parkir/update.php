<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Parkir */

$this->title = 'Update Parkir: ' . $model->p_id;
$this->params['breadcrumbs'][] = ['label' => 'Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p_id, 'url' => ['view', 'id' => $model->p_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parkir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
