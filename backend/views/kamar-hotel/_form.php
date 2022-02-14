<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Hotel;
use backend\models\KategoriKamar;
use backend\models\KategoriBed;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\KamarHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-hotel-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
    <?= $form->field($model, 'kh_hotel')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Hotel::find()->all(),'hotel_id','h_nama'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <div class="col-md-12">
        <?= $form->field($model, 'kh_nama')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriKamar::find()->all(),'id_kamar','nama_kamaar'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'kh_luas_kamar')->textInput() ?>
    </div>
    <div class="col-md-12">
        <?= $form->field($model, 'kh_jenis_bed')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(KategoriBed::find()->all(),'id_bed','nama_bed'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'kh_harga')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'kh_sisa_kamar')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'kh_jumlah_tamu')->textInput() ?>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
