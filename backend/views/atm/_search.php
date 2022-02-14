<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AtmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'atm_id') ?>

    <?= $form->field($model, 'atm_nama') ?>

    <?= $form->field($model, 'atm_nama_bank') ?>

    <?= $form->field($model, 'atm_alamat') ?>

    <?= $form->field($model, 'atm_latitude') ?>

    <?php // echo $form->field($model, 'atm_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
