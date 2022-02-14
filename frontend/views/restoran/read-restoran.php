<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Restoran;

$restoran = Restoran::find()->where(['status' => 1, 'restoran_id' => $id])->one();
$listRestoran2 = Restoran::find()->all();
$this->title = $restoran->restoran_nama;
?>

<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/restoran/']) ?>">Restoran</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($restoran->restoran_nama), 5)?></a></li>
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
					<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $restoran->restoran_nama ?></h3>
			         	<div class="blog-img">
							<img class="img-responsive" style="width: 500px; height: 300px" src="<?php echo Url::to('@web/login/images/Restoran/'. $restoran->restoran_photo)?>" alt="">
						</div>	
						<tr> 
							    <td>&nbsp;</td>
						</tr>

						<table width="100%" border="0">
			          	<tr>
			          		<td width="26%">
			          			<div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; color: #354052"> Alamat </div>
			          		</td>
			          		<td width="1%">&nbsp;</td>
			          		<td width="73%">
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $restoran->restoran_alamat ?> </div>
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
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $restoran->restoran_detail ?> </div>
			          		</td>
			          	</tr>
			          	
			          </table>

						<!-- <td>&nbsp;</td>	            
						<div style="font-size: 15px; text-align: justify; color: #354052"> Alamat :   <?= $restoran->restoran_alamat ?>
						</div>
						<td>&nbsp;</td>	            
						<div style="font-size: 15px; text-align: justify; color: #354052"><?= $restoran->restoran_detail ?>
						</div> -->
			        </div>
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/restoran/']) ?>"><h3 class="title">Restoran Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listRestoran2 as $r) { ?>
						<a href="<?= Url::to(['/restoran/baca?id='.$r->restoran_id]) ?>"><i class="fa fa-cutlery"></i> <?= StringHelper::truncateWords(strip_tags($r->restoran_nama), 8)?></a>
                        <?php } ?>
					</div>
				</div>
			</aside>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>