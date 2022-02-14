<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MasjidSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masjid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'm_id') ?>

    <?= $form->field($model, 'm_nama') ?>

    <?= $form->field($model, 'm_alamat') ?>

    <?= $form->field($model, 'm_latitude') ?>

    <?= $form->field($model, 'm_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>