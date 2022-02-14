<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\UserKecamatan;
use yii\grid\GridView;
use dmstr\widgets\Alert;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Kota;
use backend\models\Kecamatan;
use backend\models\Desa;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
/* @var $model backend\modules\user\models\UserForm */
$js = '$(".dependent-input").on("change", function() {
    var value = $(this).val(),
        obj = $(this).attr("id"),
        next = $(this).attr("data-next");
    $.ajax({
        url: "' . Yii::$app->urlManager->createUrl('user/get') . '",
        data: {value: value, obj: obj},
        type: "POST",
        success: function(data) {
            $("#" + next).html(data);
        }
    });
});';

$this->registerJs($js);

$this->title = 'User Admin Kecamatan';
?>
<div class="site-signup">
    <div class="box box-solid box-info">
        <div class="box-header">
        <center><h3 class="box-title">Data <?= Html::encode($this->title) ?></h3></center>
        </div>
        <div class="box-body">
                <div class="col-lg-5 border-right">
                    
                    <?= Alert::widget();?>
                    <br />
                    <?php $form = ActiveForm::begin(['layout'=>'horizontal'])?>
                    
                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'User name']);?>
                    
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']);?>
                    
                    <?= $form->field($model, 'level')->dropDownList([
                        UserKecamatan::LEVEL_KEC => 'Pegawai Kecamatan',

                    ],['prompt'=>'Pilih Level User']);?>
                    <?= $form->field($modelCamat, 'id_KAB')->dropDownList(ArrayHelper::map(Kota::find()->all(), 'kota_id', 'nama_kota'), [
                        'prompt' => Yii::t('app', 'Pilih Kota'),
                        'id' => 'id_KAB',
                        'class' => 'dependent-input form-control',
                        'data-next' => 'id_KEC'
                    ])->label('Kota') ?>

                    <?= $form->field($modelCamat, 'id_KEC')->dropDownList([], [
                        'prompt' => Yii::t('app', 'Pilih Kecamatan'),
                        'id' => 'id_KEC',
                        'class' => 'dependent-input form-control',
                        'data-next' => 'id_KEL'
                    ])->label('Kecamatan') ?>

                    
                    <div class="form-group">
                        <label class="control-label col-sm-3 sr-only">Button</label>
                        <div class="col-sm-6">
                            <?= Html::submitButton('Submit',['class' => 'btn btn-success']); ?>
                            <?= Html::a('Cancel',['index'],['class' => 'btn btn-primary']); ?>
                        </div>
                    </div>
                    <?php ActiveForm::end();?>                  
                </div>
                <div class="col-lg-7">
                    
                    <?php $formFilter = ActiveForm::begin(['layout'=>'inline','method'=>'get']);?>
                    
                    <?= $formFilter->field($search, 'username')->textInput(['placeholder' => 'Cari: username']);?>
                    
                    <?= $formFilter->field($search, 'level')->dropDownList([
                        UserKecamatan::LEVEL_KEC => 'Pegawai Kecamatan',
                        
                    ],['prompt'=>'Pilih Level User']);?>
                    
                    <?= Html::submitButton('Cari',['class'=>'btn btn-primary']);?>
                    <?= Html::a('Cancel',['index'],['class' => 'btn btn-default']); ?>
                    
                    <?php ActiveForm::end(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn',
                                'header' => 'No'
                            ],
                            'username',
                            [
                                'attribute' => 'level',
                                'value' => function($model){
                                    $stat = $model->getlevelLabel();
                                    return Html::tag(
                                        'span', $stat['level'], ['class' => $stat['class']]
                                    );
                                },
                                'format' => 'html'
                            ],
                            // [
                            //     'label' => 'Kota',  
                            //     'format'=>'html',
                            //     'contentOptions'=>['style'=>'white-space: normal;'],
                            //     'value' => function ($data){
                            //         $listkota='';
                            //         foreach ($data->logins as $kota) {
                            //             if ($kota->id_KAB) {
                            //             $listkota .=  $kota->kota->nama_kota;
                            //             } 
                            //         }
                            //         return $listkota;
                            //     }
                            // ],
                            [
                                'label' => 'Kecamatan',  
                                'format'=>'html',
                                'contentOptions'=>['style'=>'white-space: normal;'],
                                'value' => function ($data){
                                    $listcamat='';
                                    foreach ($data->logins as $camat) {
                                        if ($camat->id_KEC) {
                                        $listcamat .=  $camat->kecamatan->nama_kec;
                                        } 
                                    }
                                    return $listcamat;
                                }
                            ],
                            'created_at:datetime',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{ubah} {delete}',
                                'header' => 'Action',
                                'buttons' => [
                                    'ubah' => function($url,$model,$key){
                                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',[
                                            'index','id'=>$key
                                        ],[
                                            'arial-label' => 'ubah',
                                            'title' => 'ubah data',
                                            'data-confirm'=>'Apakah Anda Ingin Menggubah Data Admin Kecamatan?',
                                    'data-method'=>'post',
                                        ]); },
                                    'delete' => function ($url, $model, $key){
                                    return Html::a('<i class="fa fa-trash"></i>', ['/user-kecamatan/delete','id'=>$key], [
                                    'aria-label' => 'Hapus Admin Kecamatan',
                                    'title'=>'Hapus Admin Kecamatan',
                                    'data-confirm'=>'Apakah Anda Ingin Menghapus Data Admin Kecamatan?',
                                    'data-method'=>'post',
                                    ]); }
                                ]
                            ],
                        ],
                    ]); ?>            
                </div>
            </div>
        </div>
</div>

