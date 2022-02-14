<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Spbu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spbu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'spbu_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbu_alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbu_latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbu_longitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
