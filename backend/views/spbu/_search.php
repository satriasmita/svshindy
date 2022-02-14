<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpbuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spbu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'spbu_id') ?>

    <?= $form->field($model, 'spbu_nama') ?>

    <?= $form->field($model, 'spbu_alamat') ?>

    <?= $form->field($model, 'spbu_latitude') ?>

    <?= $form->field($model, 'spbu_longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
