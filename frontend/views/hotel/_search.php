<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hotel_id') ?>

    <?= $form->field($model, 'h_nama') ?>

    <?= $form->field($model, 'h_alamat') ?>

    <?= $form->field($model, 'h_telp') ?>

    <?= $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'foto2') ?>

    <?php // echo $form->field($model, 'foto3') ?>

    <?php // echo $form->field($model, 'foto4') ?>

    <?php // echo $form->field($model, 'h_latitude') ?>

    <?php // echo $form->field($model, 'h_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
