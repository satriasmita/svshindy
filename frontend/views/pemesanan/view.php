<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Hotel;
use backend\models\FasilitasHotel;
use backend\models\KamarHotel;
use backend\models\KategoriKamar;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */

$js = '$(".dependent-input").on("change", function() {
    var value = $(this).val(),
        obj = $(this).attr("id"),
        next = $(this).attr("data-next");
    $.ajax({
        url: "' . Yii::$app->urlManager->createUrl('pemesanan/get') . '",
        data: {value: value, obj: obj},
        type: "POST",
        success: function(data) {
            $("#" + next).html(data);
        }
    });
});';

$this->registerJs($js);

// $listHotel=ArrayHelper::map(KamarHotel::find()->all(),'kh_id',function ($data, $defaultValue)
//     {
//     return $data->getKhKode();
//     }
// );

$this->title = $model->pemesanan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

// var_dump($m );die();
$tes=$model->pemesanan_id;
?>

<div id="blog" class="section md-padding" style="padding-top: 50px;">
		<!-- Container -->
	<div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box box-solid box-success">
            <div class="col-12 d-flex align-items-stretch" style="padding: 0px; ">
                <div class="row d-flex align-items-stretch">
                    <div class="box box-solid" >
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Identitas Hotel </h3>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            [
                                'attribute' => 'pemesanan_hotel_id',
                                'value' => $model->hotel->h_nama,
                                'label' => 'Hotel'
                            ],
                            [
                                'attribute' => 'pemesanan_hotel_id',
                                'value' => $model->hotel->h_alamat,
                                'label' => 'Alamat'
                            ],
                            [
                                'attribute' => 'pemesanan_hotel_id',
                                'value' => $model->hotel->h_telp,
                                'label' => 'Nomor Telepon'
                            ],

                        ],
                    ]) ?>
                    </div>
                </div>
            </div>
          </div>
    </div>
  </div>

<div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box">
                <div class="row">
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Fasilitas Hotel </h3>
                        <?php if (!$carifasilitas) { ?>
                        <td colspan="7">Tidak ada Data Fasilitas Hotel</td>
                        <?php } else { ?>
                    </tr>                    
                    <tr>
                        <div>
                        AC : <?= $carifasilitas->fh_ac == 1 ? 'Tersedia' : ($carifasilitas->fh_ac == 2 ? 'Tidak' : '')
                        ?></div>
                        <div>
                        Wifi : <?= $carifasilitas->fh_wifi == 1 ? 'Tersedia' : ($carifasilitas->fh_wifi == 2 ? 'Tidak' : '')
                        ?></div>
                        <div>
                        Tempat Parkir : <?= $carifasilitas->fh_tempat_parkir == 1 ? 'Tersedia' : ($carifasilitas->fh_tempat_parkir == 2 ? 'Tidak' : '')
                        ?></div>
                        <div>
                        Restorant : <?= $carifasilitas->fh_restorant == 1 ? 'Tersedia' : ($carifasilitas->fh_restorant == 2 ? 'Tidak' : '')
                        ?></div>
                        <div>
                        Resepsionis : <?= $carifasilitas->fh_resepsionis == 1 ? 'Tersedia' : ($carifasilitas->fh_resepsionis == 2 ? 'Tidak' : '')
                        ?></div>
                        <?php } ?>
                    </tr>
                </table>
                </div>
          </div>
    </div>
  </div>

<div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box">
            <div class="row">
                <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Kamar Hotel </h3>
                <?php $form = ActiveForm::begin([
                    'action' => ['search-pemesanan?id='.$tes.'&'],
                    'method' => 'get',
                    ]); ?>
                    <?= Html::dropDownList('id_kamar', null,
                        ArrayHelper::map(KategoriKamar::find()->all(), 'id_kamar', 'nama_kamaar')) ?>
                        
                    <div class="form-group">
                        <?= Html::submitButton('Search!', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>