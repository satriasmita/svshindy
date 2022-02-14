<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KulinerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuliner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kuliner') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
