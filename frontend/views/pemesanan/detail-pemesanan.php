<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\helpers\Url;
use backend\models\Hotel;
use backend\models\FasilitasHotel;
use backend\models\KamarHotel;
use backend\models\FasilitasKamarHotel;
use backend\models\KategoriKamar;
use backend\models\KategoriBed;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */


?>

<div id="blog" class="section md-padding" style="padding-top: 50px;">
		<!-- Container -->
	<div class="container" style="width: 50%">
    <div class="row"> 
        <div class="box box-solid box-success">
            <div class="col-12 d-flex align-items-stretch" style="padding: 0px; ">
                <div class="row d-flex align-items-stretch">
                    <div class="box box-solid" >
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Booking Details </h3>
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
                    <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"></h3>
                      <?= DetailView::widget([
                          'model' => $model,
                          'attributes' => [
                            [
                                  'attribute' => 'pemesanan_hotel_id',
                                  'value' => $model->pemesanan_checkin,
                                  'label' => 'Check in'
                            ],
                            [
                                'attribute' => 'pemesanan_hotel_id',
                                'value' => $model->pemesanan_durasi. ' Hari',
                                'label' => 'Durasi'
                            ],                        
                          ],
                      ]) ?>
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
                                  
                                  'value' => $carikamar->kh_harga,
                                  'label' => 'Harga',
                              ],

                          ],
                      ]) ?>                      
                      <?php } ?>

                      <h3 style="color: red; font-size: 25px; font-family: Merriweather Light"></h3>
                      <?= DetailView::widget([
                          'model' => $model,
                          'attributes' => [
                        
                           [
                                'attribute'=>'pemesanan_total',
                                'label'=>'Total',
                                'value'=>function($model){

                                  $jumlahhari = $model->pemesanan_durasi;

                                  $hargapemesanan = $model->hotelKamar->kh_harga;

                                  $total_bayar = $jumlahhari * $hargapemesanan;

                                  return 'Rp. '.number_format($total_bayar,0);
                                }
                            ]
                          ],
                      ]) ?>
                      

                </div>
            </div>
          </div>
    </div>
  </div>
  
<div class="container">
    <div class="container" style="width: 89%">
        <div class="pemesanan-form">
            <?php $form = ActiveForm::begin(); ?>
                <div class="row"> 
                <div class="col-md-12">
                <h3 style="color: red; font-size: 25px; font-family: Sans-Serif"> Information </h3>
                </div>
                    <div class="col-md-12">
                        <?= $form->field($booking, 'pemesanan_nama')->textInput() ?>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($booking, 'pemesanan_notelp')->textInput() ?>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($booking, 'pemesanan_email')->textInput() ?>
                    </div>
                    <!-- <div class="col-md-6">
                        ?= $form->field($booking, 'pemesanan_status')->textInput() ?>
                    </div> -->
                    <div class="col-md-12">
                        <?= Html::submitButton('Continue Booking', ['class' => 'btn btn-success']) ?>
                    </div>
                    <div class="col-md-12">
                <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



    
    
    

