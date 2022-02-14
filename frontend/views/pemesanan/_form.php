<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Hotel;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row"> 
        <div class="col-md-6">
            <?= $form->field($model, 'pemesanan_hotel_id')->label('Nama Hotel')->dropDownList(
                ArrayHelper::map(Hotel::find()->all(),'hotel_id','h_nama'),
                ['prompt'=>'Pilih Hotel']
            ) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pemesanan_checkin')->widget(DatePicker::className(),[
                    'language' => 'id',
                    'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true
                    ]
                ]) ?>
        </div>
        <div class="col-md-6">    
            <?= $form->field($model, 'pemesanan_durasi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pemesanan_tamu_dewasa')->textInput() ?>   
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pemesanan_tamu_anak')->textInput() ?> 
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pemesanan_jumlah_kamar')->textInput() ?>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        </div>
        <div class="col-md-12">
    <?php ActiveForm::end(); ?>
</div>
    </div>


    
    
    
<!-- <div class="col-md-6">
    ?= $form->field($model, 'pemesanan_nama')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    ?= $form->field($model, 'pemesanan_notelp')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    ?= $form->field($model, 'pemesanan_email')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    ?= $form->field($model, 'pemesanan_status')->textInput() ?>
</div> -->

