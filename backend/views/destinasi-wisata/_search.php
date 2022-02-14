<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinasiWisataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="destinasi-wisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_destinasi') ?>

    <?= $form->field($model, 'nama_destinasi') ?>

    <?= $form->field($model, 'detail') ?>

    <?= $form->field($model, 'alamat') ?>
    
    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'foto2') ?>

    <?php // echo $form->field($model, 'foto3') ?>

    <?php // echo $form->field($model, 'foto4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
