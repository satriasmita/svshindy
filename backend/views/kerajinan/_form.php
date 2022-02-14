<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Kerajinan */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="kerajinan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_jenis')->dropDownList([
            '1' => 'KERAJINAN BERBASIS TEMPURUNG, KAYU DAN KERANG',
            '2' => 'KERAJINAN SULAIMAN',
            '3' => 'KERAJINAN RAJUTAN',
            '4' => 'MAKANAN'
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>
        </div>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_usaha')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_pemilik')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_alamat')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_telepon')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'kerajinan_keterangan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
