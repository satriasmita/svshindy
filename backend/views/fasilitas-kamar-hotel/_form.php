<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Hotel;
use backend\models\KategoriKamar;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasKamarHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fasilitas-kamar-hotel-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="col-md-12">
    <?= $form->field($model, 'kh_id')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Hotel::find()->all(),'hotel_id','h_nama'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'fkh_kategori_kamar')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriKamar::find()->all(),'id_kamar','nama_kamaar'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_balkon')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_coffe_maker')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_ac')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_hot_water')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_wifi')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_sarapan')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_shower')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_tv')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'fkh_kulkas')->radioList(array('1'=>'Tersedia',2=>'Tidak Tersedia')); ?>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
