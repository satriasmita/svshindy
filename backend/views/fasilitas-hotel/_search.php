<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasHotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fasilitas-hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fh_id') ?>

    <?= $form->field($model, 'fh_hotel') ?>

    <?= $form->field($model, 'fh_ac') ?>

    <?= $form->field($model, 'fh_kolam_renang') ?>

    <?= $form->field($model, 'fh_tempat_parkir') ?>

    <?php // echo $form->field($model, 'fh_wifi') ?>

    <?php // echo $form->field($model, 'fh_restorant') ?>

    <?php // echo $form->field($model, 'fh_resepsionis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
