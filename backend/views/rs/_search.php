<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rs_id') ?>

    <?= $form->field($model, 'rs_nama') ?>

    <?= $form->field($model, 'rs_alamat') ?>

    <?= $form->field($model, 'rs_latitude') ?>

    <?= $form->field($model, 'rs_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
