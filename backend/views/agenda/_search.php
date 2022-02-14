<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AgendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'agenda_id') ?>

    <?= $form->field($model, 'agenda_nama') ?>

    <?= $form->field($model, 'agenda_isi') ?>

    <?= $form->field($model, 'agenda_lokasi') ?>

    <?= $form->field($model, 'agenda_mulai') ?>

    <?php // echo $form->field($model, 'agenda_selesai') ?>

    <?php // echo $form->field($model, 'agenda_photoid') ?>

    <?php // echo $form->field($model, 'agenda_latitude') ?>

    <?php // echo $form->field($model, 'agenda_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
