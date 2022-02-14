<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Hotel */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="hotel-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
    <?= $form->field($model, 'h_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'h_telp')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
    <div class="col-md-12">
    <?= $form->field($model, 'h_alamat')->textarea(['rows' => 6]) ?>
</div>

<div class="col-md-12">
    <h3> Foto wajib di upload semua! </h3>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto2')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto3')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto4')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'h_latitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'h_longitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
