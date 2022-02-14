<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KerajinanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kerajinan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kerajinan_id') ?>

    <?= $form->field($model, 'kerajinan_jenis') ?>

    <?= $form->field($model, 'kerajinan_usaha') ?>

    <?= $form->field($model, 'kerajinan_pemilik') ?>

    <?= $form->field($model, 'kerajinan_alamat') ?>

    <?php // echo $form->field($model, 'kerajinan_telepon') ?>

    <?php // echo $form->field($model, 'kerajinan_keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
