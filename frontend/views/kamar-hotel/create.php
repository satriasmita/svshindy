<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KamarHotel */

$this->title = 'Create Kamar Hotel';
$this->params['breadcrumbs'][] = ['label' => 'Kamar Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-hotel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
