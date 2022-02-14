<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Hotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'h_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'h_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_longitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
