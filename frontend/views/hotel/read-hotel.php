<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Hotel;
use backend\models\KamarHotel;


/* @var $this yii\web\View */

$hotel = Hotel::find()->where(['status' => 1,'hotel_id' => $id])->one();
$listHotel2 = Hotel::find()->all();
$allKamar = KamarHotel::find()->where(['kh_hotel' => $id])->all();
$this->title = $hotel->h_nama;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/agenda/']) ?>">Hotel</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($hotel->h_nama), 5)?></a></li>
		</ul>
	</div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">
		<!-- Container -->
	<div class="container" style="width: 80%">
			<!-- Row -->
		<div class="row">				
			  <!-- Start Blog Area -->
			<main id="main" class="col-md-8" style=" background-color:#DAD5D5">
			    <div class="blog-inner area-padding" style="padding: 20px">
			        <div class="row">
			          <!-- Start Left Blog -->
						<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $hotel->h_nama ?></h3>
			        		<div class="blog-img">
								<img class="img-responsive" style="width: 500px; height: 250px" src="<?php echo Url::to('@web/login/images/Hotel/'. $hotel->foto)?>" alt="">
							</div>
						<tr> 
							    <td>&nbsp;</td>
						</tr>
						<table width="100%" border="0">
				          	<tr>
				          		<td width="10%">
				          			<div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; color: #354052"> &nbsp;&nbsp;Alamat </div>
				          		</td>
				          		<td width="0%">&nbsp;</td>
				          		<td width="88%">
				          			<div style="font-size: 15px; text-align: justify; color: #354052">:&nbsp;<?= $hotel->h_alamat ?> </div>
				          		</td>
				          	</tr>
				          	<tr> 
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
							</tr>
				          	<tr>
				          		<td>
				          			<div class="fa fa-calendar-plus-o"; style="font-size: 15px; text-align: justify; color: #354052"> &nbsp;&nbsp;Telepon </div>

				          		</td>
				          		<td>&nbsp;</td>
				          		<td>
				          			<div style="font-size: 15px; text-align: justify; color: #354052">:&nbsp;<?= $hotel->h_telp ?> </div>
				          			
				          		</td>
				          	</tr>			         
			          </table>
				    <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" style="padding: 20px; background-color:#DAD5D5 ">
							<div class="row d-flex align-items-stretch">
				            	<div class="box box-solid" >
								              <div class="box-header">
								                <h3 style="color: #ff4d4d; font-size: 30px; font-family: Garamond"> Fasilitas Hotel </h3>
									              <table width="100%" border="0">
									                <tr>
									                  <?php if (!$fasilitass) { ?>
									                  <td colspan="7">Tidak ada Data Fasilitas Hotel</td>
									                  <?php } else { ?>
								                    </tr>
								                    <tr>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> AC </div>
									                  </td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Wifi </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Parking </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Restoran </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Resepsionis </div></td>	
									                </tr>
									                <tr>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/ac.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/wifi.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/parkir.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/restoran.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/24-hours.png')?>"  style="width: 30px; height: 25px" /></td>
								                    </tr>
									                <tr>
									                  <td><?= $fasilitass->fh_ac == 1 ? 'Tersedia' : ($fasilitass->fh_ac == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitass->fh_wifi == 1 ? 'Tersedia' : ($fasilitass->fh_wifi == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitass->fh_tempat_parkir == 1 ? 'Tersedia' : ($fasilitass->fh_tempat_parkir == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitass->fh_restorant == 1 ? 'Tersedia' : ($fasilitass->fh_restorant == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitass->fh_resepsionis == 1 ? 'Tersedia' : ($fasilitass->fh_resepsionis == 2 ? 'Tidak' : '')
									              		?></td>
									                  <?php } ?>
								                    </tr>
								                </table>
								</div>
							</div>
						</div>
			        </div>
			<div class="container">
			 	<div class="row">
			 		<table width="100%" border="0">
			 		  <tr>
			 		    <td width="19%"><h3 style="color: #ff4d4d; font-size: 30px; font-family: Garamond"> Kamar </h3><?php foreach ($allKamar as $a){ ?></td>
			 		    <td width="81%">&nbsp;</td>
		 		      </tr>
			 		  <tr>			 		  	
			 		    <td> Jenis Kamar</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_nama), 1)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td>Luas Kamar</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_luas_kamar), 100)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td>Jenis Bed</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_jenis_bed), 1)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td>Harga</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_harga), 1)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td>Sisa Kamar</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_sisa_kamar), 1)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td>Jumlah</td>
			 		    <td><?= StringHelper::truncateWords(strip_tags($a->kh_jumlah_tamu), 1)?></td>
		 		      </tr>
			 		  <tr>
			 		    <td><?php }?></td>
			 		    <td>&nbsp;</td>
		 		      </tr>
		 		  </table>
                </div>
			 </div>
			        <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" style="padding: 20px; background-color:#DAD5D5 ">
							<div class="row d-flex align-items-stretch">
				            	<div class="box box-solid" >
								              <div class="box-header">
								                <h3 style="color: #ff4d4d; font-size: 30px; font-family: Garamond"> Fasilitas Kamar Hotel </h3>
									              <table width="100%" border="0">
									                <tr>
									                  <?php if (!$fasilitasKamar) { ?>
									                  <td colspan="7">Tidak ada Data Fasilitas Hotel</td>
									                  <?php } else { ?>
								                    </tr>
								                    <tr>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Coffe </div>
									                  </td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> AC </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Hot Water </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Wifi </div></td>	
									                </tr>
									                <tr>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/coffee.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/ac.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/hot-water.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/wifi.png')?>"  style="width: 30px; height: 25px" /></td>	</tr>
									                <tr>
									                  <td><?= $fasilitasKamar->fkh_coffe_maker == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_coffe_maker == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_ac == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_ac == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_hot_water == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_hot_water == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_wifi == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_wifi == 2 ? 'Tidak' : '')
									              		?></td>
									                  
									                  <?php } ?>
								                    </tr>
								                </table>
							                    <p>&nbsp;</p>
							                    <table width="100%" border="0">
									                <tr>
									                  <?php if (!$fasilitasKamar) { ?>
									                  <td colspan="7">Tidak ada Data Fasilitas Hotel</td>
									                  <?php } else { ?>
								                    </tr>
								                    <tr>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Breakfast </div>
									                  </td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Shower </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> TV </div></td>
									                  <td width="25%"><div style="color: #ff4d4d; font-size: 16px; font-family: Garamond"> Kulkas </div></td>	
									                </tr>
									                <tr>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/breakfast.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/shower.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/tv.png')?>"  style="width: 30px; height: 25px" /></td>
									                  <td><img src="<?php echo Url::to('@web/login/images/Fasilitas/kulkas.png')?>"  style="width: 30px; height: 25px" /></td>	</tr>
									                <tr>
									                  <td><?= $fasilitasKamar->fkh_sarapan == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_sarapan == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_shower == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_shower == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_tv == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_tv == 2 ? 'Tidak' : '')
									              		?></td>
									                  <td><?= $fasilitasKamar->fkh_kulkas == 1 ? 'Tersedia' : ($fasilitasKamar->fkh_kulkas == 2 ? 'Tidak' : '')
									              		?></td>
									                  
									                  <?php } ?>
								                    </tr>
								                </table>
								</div>
							</div>
						</div>
			        </div>
			    </div>			   
			</main>

			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/hotel/']) ?>"><h3 class="title">Hotel Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listHotel2 as $h) { ?>
						<a href="<?= Url::to(['/hotel/baca?id='.$h->hotel_id]) ?>"><i class="fa fa-building"></i> <?= StringHelper::truncateWords(strip_tags($h->h_nama), 8)?></a>
                        <?php } ?>
					</div>
				</div>
				<!-- /Category -->
				<!-- Category -->
		
				<!-- /Category -->
			</aside>

		</div>
			<!-- /Row -->

	</div>
		<!-- /Container -->

	</div>