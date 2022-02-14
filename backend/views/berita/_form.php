
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Berita */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'berita_judul')->textInput()  ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'berita_status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
        <div class="col-md-12">
            <?php
        echo $form->field($model, 'berita_isi')->widget(CKEditor::className(), [ 
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
        <div class="col-md-6">
            <?= $form->field($model, 'berita_tanggal')->widget(DatePicker::className(),[
            'language' => 'id',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]) ?>
        </div>
        <!-- <div class="col-md-6">
            <?= $form->field($model, 'berita_foto')->fileInput() ?>
        </div> -->
        <div class="col-md-6">
            
        <?php if(!empty($model->berita_foto)){?>
            <img src="<?php echo Url::to('@web/images/Berita/'. $model->berita_foto);?>" alt="gambar-berita" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>

        </div>
        <div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
