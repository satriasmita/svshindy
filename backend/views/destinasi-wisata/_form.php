<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\DestinasiWisata */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="destinasi-wisata-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nama_destinasi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">

        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>

        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
    <div class="col-md-12">
        <?php
        echo $form->field($model, 'detail')->widget(CKEditor::className(), [ 
            'preset' => 'custom',
            'options' => ['rows' => 2],
            'clientOptions' => [
                'height' => 100,
                'toolbar' => [
                    [
                        'name' => 'row1',
                        'items' => [
                            'Source', '-',
                            'Bold', 'Italic', 'Underline', 'Strike', '-',
                            'Subscript', 'Superscript', 'RemoveFormat', '-',
                            'TextColor', 'BGColor', '-',
                            'NumberedList', 'BulletedList', '-',
                            'Outdent', 'Indent', '-', 'Blockquote', '-',
                            'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'list', 'indent', 'blocks', 'align', 'bidi', '-',
                            'Link', 'Unlink', 'Anchor', '-',
                            'ShowBlocks', 'Maximize',
                        ],
                    ],
                    [
                        'name' => 'row2',
                        'items' => [
                            'Image', 'Table', 'HorizontalRule', 'SpecialChar', 'Iframe', '-',
                            'NewPage', 'Print', 'Templates', '-',
                            'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-',
                            'Undo', 'Redo', '-',
                            'Find', 'SelectAll', 'Format', 'Font', 'FontSize',
                        ],
                    ],
                ],
            ],
        ]) 
        ?>
        </div>
        <div class="col-md-12">
        <?= $form->field($model, 'keunggulan')->textArea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
        <?= $form->field($model, 'fasilitas')->textArea(['maxlength' => true]) ?>
        </div>
        
    
    <div class="col-md-6">
        <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>
    </div>

<div class="col-md-6">
    <?= $form->field($model, 'foto')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto2')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto3')->fileInput() ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'foto4')->fileInput() ?>
</div>
    
<div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
