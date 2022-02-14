<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriKamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-kamar-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-md-12">
    <?= $form->field($model, 'nama_kamaar')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>