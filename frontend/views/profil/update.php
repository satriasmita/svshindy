<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profil */

$this->title = 'Update Profil: ' . $model->prof_id;
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prof_id, 'url' => ['view', 'id' => $model->prof_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
