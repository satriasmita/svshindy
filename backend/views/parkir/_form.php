<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Parkir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parkir-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-md-12">
    <?= $form->field($model, 'p_nama')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <?= $form->field($model, 'p_alamat')->textarea(['rows' => 6]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'p_latitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'p_longitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
