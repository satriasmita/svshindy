<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Akses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akses-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-md-12">
    <?= $form->field($model, 'akses_destinasi')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <?= $form->field($model, 'akses_transportasi')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <?= $form->field($model, 'akses_distance')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
