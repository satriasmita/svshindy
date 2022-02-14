<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kuliner */
/* @var $form yii\widgets\ActiveForm */
$range = range(date('Y'), 2002);
?>

<div class="kuliner-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
        <div class="col-md-6">
    		<?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    	</div>
        <div class="col-md-6">
        <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range)); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([
                '1' => 'Publish',
                '2' => 'Tidak Publish'
            ]) ?>
        </div>
        <div class="col-md-6">      
            <!-- <?= $form->field($model, 'foto')->fileInput() ?> -->
            <?php if(!empty($model->foto)){?>
            <img src="<?php echo Url::to('@web/images/Kuliner/'. $model->foto);?>" alt="gambar-kuliner" class="img-thumbnail" style="width:300px">
        <?php }?>
        <?= $form->field($model, 'image')->fileInput()->label('Upload Foto')->hint('<p class="help-block"><small>Upload Gambar/Foto dengan format <b>png, jpg, jpeg</b>,<b>Maximal</b> 2 Mb.</small></p>') ?>
        </div>
        <div class="col-md-12">
		    <?php
        echo $form->field($model, 'keterangan')->widget(CKEditor::className(), [ 
            'preset' => 'custom',
            'options' => ['rows' => 2],
            'clientOptions' => [
                'height' => 300,
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
	    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-arrow-left"></i> Kembali',['index'],['class'=>'btn btn-default']); ?>
    	</div>
    	</div>
    <?php ActiveForm::end(); ?>
	</div>
</div>
