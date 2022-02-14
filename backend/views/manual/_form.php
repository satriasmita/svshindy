<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Manual */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manual_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manual_file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
