<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RestoranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restoran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'restoran_id') ?>

    <?= $form->field($model, 'restoran_nama') ?>

    <?= $form->field($model, 'restoran_alamat') ?>

    <?= $form->field($model, 'restoran_telepon') ?>

    <?= $form->field($model, 'restoran_detail') ?>

    <?php // echo $form->field($model, 'restoran_photo') ?>

    <?php // echo $form->field($model, 'restoran_pemilik') ?>

    <?php // echo $form->field($model, 'restoran_latitude') ?>

    <?php // echo $form->field($model, 'restoran_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
