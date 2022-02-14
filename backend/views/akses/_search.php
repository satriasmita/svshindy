<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AksesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'akses_id') ?>

    <?= $form->field($model, 'akses_destinasi') ?>

    <?= $form->field($model, 'akses_transportasi') ?>

    <?= $form->field($model, 'akses_distance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
