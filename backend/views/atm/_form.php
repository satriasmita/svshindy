<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\Url;
/* @var $this yii\web\

/* @var $this yii\web\View */
/* @var $model backend\models\Atm */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="atm-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'atm_nama')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'atm_nama_bank')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'atm_alamat')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'atm_latitude')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'atm_longitude')->textInput(['maxlength' => true]) ?>
        </div>    
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
        <div class="col-md-6">

        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>

        </div>
        <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
