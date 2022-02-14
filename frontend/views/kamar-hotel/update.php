<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KamarHotel */

$this->title = 'Update Kamar Hotel: ' . $model->kh_id;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kh_id, 'url' => ['view', 'id' => $model->kh_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-hotel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
