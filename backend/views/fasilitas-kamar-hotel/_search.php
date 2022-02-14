<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasKamarHotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fasilitas-kamar-hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fkh_id') ?>

    <?= $form->field($model, 'kh_id') ?>

    <?= $form->field($model, 'fkh_balkon') ?>

    <?= $form->field($model, 'fkh_coffe_maker') ?>

    <?= $form->field($model, 'fkh_ac') ?>

    <?php // echo $form->field($model, 'fkh_hot_water') ?>

    <?php // echo $form->field($model, 'fkh_wifi') ?>

    <?php // echo $form->field($model, 'fkh_sarapan') ?>

    <?php // echo $form->field($model, 'fkh_shower') ?>

    <?php // echo $form->field($model, 'fkh_tv') ?>

    <?php // echo $form->field($model, 'fkh_kulkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
