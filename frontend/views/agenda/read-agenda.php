<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Agenda;

/* @var $this yii\web\View */

$agenda = Agenda::find()->where(['status' => 1,'agenda_id' => $id])->one();
$listAgenda = Agenda::find()->where(['status' => 1])->one();
$listAgenda2 = Agenda::find()->all();
$this->title = $agenda->agenda_nama;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/agenda/']) ?>">Agenda</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($agenda->agenda_nama), 5)?></a></li>
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
					<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $agenda->agenda_nama ?></h3>
			        	<div class="blog-img">
							<img class="img-responsive" style="width: 200px; height: 300px" src="<?php echo Url::to('@web/login/images/Agenda/'. $agenda->agenda_photoid)?>" alt="">
						</div>
						<tr> 
							    <td>&nbsp;</td>
						</tr>
						<table width="100%" border="0">
			          	<tr>
			          		<td width="20%">
			          			<div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; color: #354052"> Lokasi </div>
			          		</td>
			          		<td width="1%">&nbsp;</td>
			          		<td width="79%">
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $agenda->agenda_lokasi ?> </div>
			          		</td>
			          	</tr>
			          	<tr> 
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						</tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-calendar-plus-o"; style="font-size: 15px; text-align: justify; color: #354052"> Tanggal </div>

			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $agenda->agenda_mulai ?> </div>
			          			
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
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $agenda->agenda_isi ?> </div>
			          		</td>
			          	</tr>
			          	
			          </table>
			        </div>
			        
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/agenda/']) ?>">
					<h3 class="title">Agenda Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listAgenda2 as $a) { ?>
						<a href="<?= Url::to(['/agenda/baca?id='.$a->agenda_id]) ?>"><i class="fa fa-calendar-plus-o"></i> <?= StringHelper::truncateWords(strip_tags($a->agenda_nama), 8)?></a>
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