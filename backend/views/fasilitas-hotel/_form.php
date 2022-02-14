<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Hotel;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fasilitas-hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12">
    <?= $form->field($model, 'fh_hotel')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Hotel::find()->all(),'hotel_id','h_nama'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_ac')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_kolam_renang')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_tempat_parkir')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_wifi')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_restorant')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_resepsionis')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'fh_transportasi')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
