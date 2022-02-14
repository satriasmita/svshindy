<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KamarHotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kh_id') ?>

    <?= $form->field($model, 'kh_hotel') ?>

    <?= $form->field($model, 'kh_nama') ?>

    <?= $form->field($model, 'kh_luas_kamar') ?>

    <?= $form->field($model, 'kh_jenis_bed') ?>

    <?php // echo $form->field($model, 'kh_harga') ?>

    <?php // echo $form->field($model, 'kh_sisa_kamar') ?>

    <?php // echo $form->field($model, 'kh_jumlah_tamu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
