<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Masjid */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="masjid-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
        <div class="col-md-12">
    <?= $form->field($model, 'm_nama')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <?= $form->field($model, 'm_alamat')->textarea(['rows' => 6]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'm_latitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'm_longitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
        <div class="col-md-6">

        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>

        </div>
<div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
