<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
    <?= $form->field($model, 'agenda_nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'agenda_isi')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <!-- <?= $form->field($model, 'agenda_lokasi')->textarea(['rows' => 6]) ?> -->
    <?= $form->field($model, 'agenda_lokasi')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'agenda_mulai')->widget(DatePicker::className(),[
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
    <?= $form->field($model, 'agenda_selesai')->widget(DatePicker::className(),[
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
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
<div class="col-md-6">
    <?= $form->field($model, 'agenda_latitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'agenda_longitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <!-- <?= $form->field($model, 'agenda_photoid')->fileInput() ?> -->
    <?php if(!empty($model->agenda_photoid)){?>
            <img src="<?php echo Url::to('@web/images/Agenda/'. $model->agenda_photoid);?>" alt="gambar-agenda" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
</div>
<div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
