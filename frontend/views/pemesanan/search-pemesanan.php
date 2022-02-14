<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Hotel;
use backend\models\FasilitasHotel;
use backend\models\KamarHotel;
use backend\models\KategoriKamar;
use backend\models\KategoriBed;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

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
// $km=$carikamar->kh_hotel;
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

                    <?= DetailView::widget([
                        'model' => $carifasilitas,
                        'attributes' => [
                            [
                                
                                'value' => $carifasilitas->fh_ac == 1 ? 'Tersedia' : ($carifasilitas->fh_ac == 2 ? 'Tidak' : ''),
                    
                                'label' => 'Pendingin Udara (AC)'
                            ],
                            [
                                
                                'value' => $carifasilitas->fh_wifi == 1 ? 'Tersedia' : ($carifasilitas->fh_wifi == 2 ? 'Tidak' : ''),
                                'label' => 'Wifi'
                            ],
                            [
                                
                                'value' => $carifasilitas->fh_tempat_parkir == 1 ? 'Tersedia' : ($carifasilitas->fh_tempat_parkir == 2 ? 'Tidak' : ''),
                                'label' => 'Tempat Parkir'
                            ],
                            [
                            
                            'value' => $carifasilitas->fh_restorant == 1 ? 'Tersedia' : ($carifasilitas->fh_restorant == 2 ? 'Tidak' : ''),
                            'label' => 'Restoran'
                        ],
                        [
                            
                            'value' => $carifasilitas->fh_resepsionis == 1 ? 'Tersedia' : ($carifasilitas->fh_resepsionis == 2 ? 'Tidak' : ''),
                            'label' => 'Resepsionis'
                        ],

                        ],
                    ]) ?>
                    
                    <?php } ?>
            </div>
          </div>
    </div>
  </div>

  <div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box box-solid box-success">
            <div class="col-8 d-flex align-items-stretch" style="padding: 0px; ">
                <div class="row d-flex align-items-stretch">
                    <div class="box box-solid" >
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Identitas Kamar</h3>
                    <?php if (!$carikamar) { ?>
                      <td colspan="7">Tidak ada Data Fasilitas Kamar Hotel</td>
                    <?php } else { ?>

                      <?= DetailView::widget
                      ([
                          'model' => $carikamar,
                          'attributes' => [
                           
                              [
                                  
                                  'value' => $carikamar->nmKamar->nama_kamaar,
                                  'label' => 'Nama Kamar'
                              ],
                              [
                                  
                                  'value' => $carikamar->khJenisBed->nama_bed,
                                  'label' => 'Jenis Bed'
                              ],
                              [
                                  
                                  'value' => $carikamar->kh_luas_kamar,
                                  'label' => 'Luas Kamar'
                              ],
                              [
                                  
                                  'value' => $carikamar->kh_harga,
                                  'label' => 'Price'
                              ],

                          ],
                      ]) ?>
                      
                      <?php } ?>
                    </div>
                </div>
            </div>
          </div>
    </div>
  </div>

  <div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box box-solid box-success">
            <div class="col-12 d-flex align-items-stretch" style="padding: 0px; ">
                <div class="row d-flex align-items-stretch">
                    <div class="box box-solid" >
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Fasilitas Kamar Hotel </h3>
                    <?php if (!$carifaskamar) { ?>
                      <td colspan="7">Tidak ada data fasilitas kamar hotel</td>
                    <?php } else { ?>

                      <?= DetailView::widget([
                          'model' => $carifaskamar,
                          'attributes' => [
                              [
                                  
                                  'value' => $carifaskamar->fkh_balkon == 1 ? 'Tersedia' : ($carifaskamar->fkh_balkon == 2 ? 'Tidak' : ''),
                                  'label' => 'Balkon'
                              ],
                              [
                                  
                                  'value' => $carifaskamar->fkh_coffe_maker == 1 ? 'Tersedia' : ($carifaskamar->fkh_coffe_maker ==2 ? 'Tidak' : ''),
                                  'label' => 'Coffee Maker'
                              ],
                              [
                                  
                                  'value' => $carifaskamar->fkh_ac == 1 ? 'Tersedia' : ($carifaskamar->fkh_ac == 2 ? 'Tidak' : '' ),
                                  'label' => 'Pendingin Udara (AC)'
                              ],
                              [
                                'value' => $carifaskamar->fkh_hot_water == 1 ? 'Tersedia' : ($carifaskamar->fkh_hot_water == 2 ? 'Tidak' : ''),
                                'label' => 'Hot Water'
                              ],
                              [
                                
                                'value' => $carifaskamar->fkh_wifi == 1 ? 'Tersedia' : ($carifaskamar->fkh_wifi == 2 ? 'Tidak' : ''),
                                'label' => 'Wifi'
                              ],
                              [
                                
                                'value' => $carifaskamar->fkh_sarapan == 1 ? 'Tersedia' : ($carifaskamar->fkh_sarapan == 2 ? 'Tidak' : ''),
                                'label' => 'Sarapan'
                              ],
                              [
                                
                                'value' => $carifaskamar->fkh_shower == 1 ? 'Tersedia' : ($carifaskamar->fkh_shower == 2 ? 'Tidak' : ''),
                                'label' => 'Shower'
                              ],
                              [
                                
                                'value' => $carifaskamar->fkh_tv == 1 ? 'Tersedia' : ($carifaskamar->fkh_tv == 2 ? 'Tidak' : ''),
                                'label' => 'Televisi (TV)'
                              ],
                              [
                                
                                'value' => $carifaskamar->fkh_kulkas == 1 ? 'Tersedia' : ($carifaskamar->fkh_kulkas == 2 ? 'Tidak' : ''),
                                'label' => 'Lemari Pendingin'
                              ],

                          ],
                      ]) ?>
                      
                      <?php } ?>
                    </div>
                </div>
            </div>
          </div>
    </div>

    <?php $form = ActiveForm::begin([
            'action' => ['detail-pemesanan?id='.$tes.''],
            'method' => 'get',
            ]); ?>
            <div class="form-group">
                <?= Html::submitButton('Search!', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
  </div>
  
</div>
