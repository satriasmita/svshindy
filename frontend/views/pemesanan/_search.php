<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pemesanan_id') ?>

    <?= $form->field($model, 'pemesan_hotel_id') ?>

    <?= $form->field($model, 'pemesanan_checkin') ?>

    <?= $form->field($model, 'pemesanan_durasi') ?>

    <?= $form->field($model, 'pemesanan_tamu_dewasa') ?>

    <?php // echo $form->field($model, 'pemesanan_tamu_anak') ?>

    <?php // echo $form->field($model, 'pemesanan_jumlah_kamar') ?>

    <?php // echo $form->field($model, 'pemesanan_nama') ?>

    <?php // echo $form->field($model, 'pemesanan_notelp') ?>

    <?php // echo $form->field($model, 'pemesanan_email') ?>

    <?php // echo $form->field($model, 'pemesanan_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
