<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\DestinasiWisata;

/* @var $this yii\web\View */

$destinasi = DestinasiWisata::find()->where(['status' => 1,'id_destinasi' => $id])->one();
$listDestinasi = DestinasiWisata::find()->where(['status' => 1])->one();
$listDestinasi2 = DestinasiWisata::find()->all();
$this->title = $destinasi->nama_destinasi;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/destinasi-wisata/']) ?>">Destinasi</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($destinasi->nama_destinasi), 5)?></a></li>
		</ul>
	</div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">

		<!-- Container -->
		<div class="container" style="width: 80%">

			<!-- Row -->
			<div class="row">

				
			  <!-- Start Blog Area -->
			  <main id="main" class="col-md-8">
			    <div class="blog-inner area-padding">
			        <div class="row">
			          <!-- Start Left Blog -->
					<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $destinasi->nama_destinasi ?></h3>
			          <div class="blog-img">
							<table width="100%" border="0">
							  <tr>
							    <td><img class="img-responsive" style="width: 500px; height: 400px"  src="<?php echo Url::to('@web/login/images/Wisata/'. $destinasi->foto)?>" alt="" /></td>
							    <td>&nbsp;</td>
							    <td><img class="img-responsive" style="width: 500px; height: 400px"src="<?php echo Url::to('@web/login/images/Wisata/'. $destinasi->foto2)?>" alt="" /></td> 
						      </tr>
							  <tr> 
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
							    <td><img class="img-responsive" style="width: 500px; height: 400px" src="<?php echo Url::to('@web/login/images/Wisata/'. $destinasi->foto3)?>" alt="" /></td>
							    <td>&nbsp;</td>
							    <td><img class="img-responsive" style="width: 500px; height: 400px" src="<?php echo Url::to('@web/login/images/Wisata/'. $destinasi->foto4)?>" alt="" /></td>
						      </tr>
					    </table>
							<p>&nbsp;</p>
			          </div>

			          <table width="100%" border="0">
			          	<tr>
			          		<td width="26%">
			          			<div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; color: #354052"> Alamat </div>
			          		</td>
			          		<td width="1%">&nbsp;</td>
			          		<td width="73%">
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->alamat ?> </div>
			          		</td>
			          	</tr>
			          	<tr> 
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						      </tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Deskripsi </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->detail ?> </div>
			          		</td>
			          	</tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Keunggulan </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->keunggulan ?> </div>
			          		</td>
			          	</tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Fasilitas </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->fasilitas ?> </div>
			          		</td>
			          	</tr>
			          </table>


                       <!-- <div style="font-size: 18px; text-align: justify; color: #354052" <i class="fa fa-paper-plane"> Alamat : <?= $destinasi->alamat ?>
						</div>	 -->	
			          <!-- <div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->alamat ?> -->
						<!-- </div>		 -->
						<!-- <div>
                        <div style="font-size: 18px; text-align: justify; color: #354052" <i class="fa fa-paper-plane"> Deskripsi : 
						</div>	            
						<div style="font-size: 15px; text-align: justify; color: #354052"><?= $destinasi->detail ?>
						</div>
			        	</div> -->
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/destinasi-wisata/']) ?>"><h3 class="title">Destinasi Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listDestinasi2 as $info) { ?>
						<a href="<?= Url::to(['/destinasi-wisata/baca?id='.$info->id_destinasi]) ?>"><i class="fa fa-paper-plane"></i> <?= StringHelper::truncateWords(strip_tags($info->nama_destinasi), 8)?></a>
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