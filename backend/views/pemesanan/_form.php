<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pemesanan_hotel_id')->textInput() ?>

    <?= $form->field($model, 'pemesanan_checkin')->textInput() ?>

    <?= $form->field($model, 'pemesanan_durasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemesanan_tamu_dewasa')->textInput() ?>

    <?= $form->field($model, 'pemesanan_tamu_anak')->textInput() ?>

    <?= $form->field($model, 'pemesanan_jumlah_kamar')->textInput() ?>

    <?= $form->field($model, 'pemesanan_total')->textInput() ?>

    <?= $form->field($model, 'pemesanan_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemesanan_notelp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemesanan_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemesanan_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
