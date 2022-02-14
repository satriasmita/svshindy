<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Hotel;

/* @var $this yii\web\View */

$hotel = Hotel::find()->where(['status' => 1,'hotel_id' => $id])->one();
$listHotel = Hotel::find()->where(['status' => 1])->one();
$listHotel2 = Hotel::find()->all();
$this->title = $hotel->h_nama;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px; background-color: ">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/hotel/']) ?>">Hotel</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($hotel->h_nama), 5)?></a></li>
		</ul>
	</div>
</div>


<div class="wrapper">
  	<section>
		<div class="container-fluid" style="width: 90%">
			<div class="row">
			  	<div class="card card-solid">
			      	<div class="card-body pb-0">
			        	<div class="row d-flex align-items-stretch">
	            			<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
	            				<div class="box box-solid" >
						            <div class="box-header">
						              <h3 class="box-title text-blue"></h3>
											<div class="row" >
												<!-- jika mau menambahkan isi disini -->
											</div>
						            <!-- /.box-body -->
						          </div>
						          <!-- /.box -->
						        </div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
	            				<div class="box" >
						            <div class="box-header">
						              	<h3 class="box-title text-blue"></h3>
											<div class="row" >
												<h2 style="color: #ff4d4d"><?= $hotel->h_nama ?></h2>
												<span style="background-color: #24a234" class="label bg-success">Hotel</span> &ensp;			          		       
													<td>&nbsp;</td>     
													<div style="font-size: 15px; text-align: justify; color: #354052"><?= $hotel->h_alamat ?>
													</div>
													<div style="font-size: 15px; text-align: justify; color: #354052"><?= $hotel->h_telp ?>
													</div>
													<div class="blog-img">
														<img src="<?php echo Url::to('@web/login/images/Hotel/'. $hotel->foto)?>" alt=""  class="img-responsive" >
												  	</div>
											</div>
						            <!-- /.box-body -->
						          	</div>
						          <!-- /.box -->
						        </div>
						        <div class="col-12 col-sm-8 col-md-4 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
							        <div class="box" >
							            <div class="box-header">
							              	<h3 class="box-title text-blue"></h3>
												<div class="row" >
														<div class="blog-img">
															<img src="<?php echo Url::to('@web/login/images/Hotel/'. $hotel->foto2)?>" alt="" width="300 " height="155" class="img-responsive" style="width: 500px; height: 250px">
													  	</div>
												</div>
							            <!-- /.box-body -->
							          	</div>
							          <!-- /.box -->
							        </div>
							    </div>
							    <div class="col-12 col-sm-8 col-md-4 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
							        <div class="box" >
							            <div class="box-header">
							              	<h3 class="box-title text-blue"></h3>
												<div class="row" >
														<div class="blog-img">
															<img src="<?php echo Url::to('@web/login/images/Hotel/'. $hotel->foto3)?>" alt="" width="300 " height="155" class="img-responsive" style="width: 500px; height: 250px">
													  	</div>
												</div>
							            <!-- /.box-body -->
							          	</div>
							          <!-- /.box -->
							        </div>
							    </div>
							    <div class="col-12 col-sm-8 col-md-4 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
							        <div class="box" >
							            <div class="box-header">
							              	<h3 class="box-title text-blue"></h3>
												<div class="row" >
														<div class="blog-img">
															<img src="<?php echo Url::to('@web/login/images/Hotel/'. $hotel->foto4)?>" alt="" width="300 " height="155" class="img-responsive" style="width: 500px; height: 250px">
													  	</div>
												</div>
							            <!-- /.box-body -->
							          	</div>
							          <!-- /.box -->
							        </div>
							    </div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
	            				<div class="box box-solid" >
						            <div class="box-header">
						              <h3 class="box-title text-blue"></h3>
											<div class="row" >
												<!-- jika mau menambahkan isi disini -->
											</div>
						            <!-- /.box-body -->
						          </div>
						          <!-- /.box -->
						        </div>
	            			</div>
		            	</div>
		        	</div>
		    	</div>
	    	</div>
		</div>
	</section>
	<td>&nbsp;</td> 
	<td>&nbsp;</td> 
	<section>
		<div class="container-fluid" style="width: 90%">
				<div class="row">
				  	<div class="card card-solid">
				      	<div class="card-body pb-0">
				        	<div class="row d-flex align-items-stretch">
		            			<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
		            				<div class="box box-solid" >
							            <div class="box-header">
							              <h3 class="box-title text-blue"></h3>
												<div class="row" >
												</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
									<div class="row d-flex align-items-stretch">
			            				<div class="box box-solid" >
								            <div class="box-header">
								              <h3 class="box-title text-blue">Fasilitas Hotel</h3>
								              <?php if (!$fasilitass) { ?>
								              	<td colspan="7">Tidak ada Data Fasilitas Hotel</td>
								              <?php } else { ?>
								              	<td>
								              		 <?= $fasilitass->fh_ac == 1 ? 'Tersedia' : ($fasilitass->fh_ac == 2 ? 'Tidak' : '')
								              		?>
								              		<?= $fasilitass->fh_wifi == 1 ? 'Tersedia' : ($fasilitass->fh_wifi == 2 ? 'Tidak' : '')
								              		?>
								              		<?= $fasilitass->fh_tempat_parkir == 1 ? 'Tersedia' : ($fasilitass->fh_tempat_parkir == 2 ? 'Tidak' : '')
								              		?>
								              		<?= $fasilitass->fh_restorant == 1 ? 'Tersedia' : ($fasilitass->fh_restorant == 2 ? 'Tidak' : '')
								              		?>
								              		<?= $fasilitass->fh_resepsionis == 1 ? 'Tersedia' : ($fasilitass->fh_resepsionis == 2 ? 'Tidak' : '')
								              		?>
								              		<br>
								              		<img src="<?php echo Url::to('@web/login/images/Fasilitas/ac.png')?>"  style="width: 60px; height: 55px">
								              	</td>
								              	<td><img src="<?php echo Url::to('@web/login/images/Fasilitas/wifi.png')?>"  style="width: 60px; height: 55px">
								              	</td>
								              	<td><img src="<?php echo Url::to('@web/login/images/Fasilitas/parkir.png')?>"  style="width: 60px; height: 55px">
								              	</td>
								              	<td><img src="<?php echo Url::to('@web/login/images/Fasilitas/restoran.png')?>"  style="width: 60px; height: 55px">
								              	</td>
								              	<td><img src="<?php echo Url::to('@web/login/images/Fasilitas/24-hours.png')?>"  style="width: 60px; height: 55px">
								              	</td>
												<?php } ?>	
															
											</div>
										</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" >
		            				<div class="box box-solid" >
							            <div class="box-header">
							              <h3 class="box-title text-blue"></h3>
												<div class="row" >
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
</div>
	</section>

	<section>
		<div class="container-fluid" style="width: 90%">
				<div class="row">
				  	<div class="card card-solid">
				      	<div class="card-body pb-0">
				        	<div class="row d-flex align-items-stretch">
		            			<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
		            				<div class="box box-solid" >
							            <div class="box-header">
							              <h3 class="box-title text-blue"></h3>
												<div class="row" >
												</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" style="padding: 25px; background-color:#DAD5D5 ">
									<div class="row d-flex align-items-stretch">
			            				<div class="box box-solid" >
								            <div class="box-header">
								              <h3 class="box-title text-blue">Kamar Hotel</h3>
								              
															
											</div>
										</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch" >
		            				<div class="box box-solid" >
							            <div class="box-header">
							              <h3 class="box-title text-blue"></h3>
												<div class="row" >
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
</div>
	</section>
</div>

  </div>
  <div class="col-md-4">
    <div class="box box-solid">
      <div class="box-header">
        <h3 class="box-title text-blue"></h3>
      </div>
    </div>
  </div>
  <p>&nbsp;</p>
	</div>
	</div>