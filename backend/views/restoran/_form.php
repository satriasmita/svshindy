<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Restoran */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="restoran-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form','options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-6">
    <?= $form->field($model, 'restoran_nama')->textInput(['maxlength' => true]) ?>
    </div>
        <div class="col-md-6">
    <?= $form->field($model, 'restoran_alamat')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'restoran_telepon')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
        <div class="col-md-12">
    <?= $form->field($model, 'restoran_detail')->textarea(['rows' => 6]) ?>
    </div>
        
<div class="col-md-6">
    <?= $form->field($model, 'restoran_pemilik')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'restoran_latitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'restoran_longitude')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>
        </div>
        <div class="col-md-6">
    <!-- <?= $form->field($model, 'restoran_photo')->fileInput() ?> -->
    <?php if(!empty($model->restoran_photo)){?>
            <img src="<?php echo Url::to('@web/images/Restoran/'. $model->restoran_photo);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
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
