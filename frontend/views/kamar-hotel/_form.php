<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KamarHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kh_hotel')->textInput() ?>

    <?= $form->field($model, 'kh_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kh_luas_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kh_jenis_bed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kh_harga')->textInput() ?>

    <?= $form->field($model, 'kh_sisa_kamar')->textInput() ?>

    <?= $form->field($model, 'kh_jumlah_tamu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
