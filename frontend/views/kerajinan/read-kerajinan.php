<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Kerajinan;

/* @var $this yii\web\View */

$kerajinan = Kerajinan::find()->where(['status' => 1,'kerajinan_id' => $id])->one();
$listKerajinan = Kerajinan::find()->where(['status' => 1])->one();
$listKerajinan2 = Kerajinan::find()->all();
$this->title = $kerajinan->kerajinan_jenis;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/kerajinan/']) ?>">Oleh-oleh</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($kerajinan->kerajinan_jenis), 5)?></a></li>
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
					<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $kerajinan->kerajinan_usaha ?></h3>
					<table width="100%" border="2">
					  <tr>
					    <td width="24%"> Nama oleh-oleh</td>
					    <td width="76%"><span style="color: #ff4d4d">
					      <?= $kerajinan->kerajinan_usaha ?>
					    </span></td>
				      </tr>
					  <tr>
					    <td> Alamat</td>
					    <td width="76%"><span style="color: #ff4d4d">
					      <?= $kerajinan->kerajinan_alamat ?>
					    </span></td>
				      </tr>
					  <tr>
					    <td> Telepon</td>
					    <td width="76%"><span style="color: #ff4d4d">
					      <?= $kerajinan->kerajinan_telepon ?>
					    </span></td>
				      </tr>
					  <tr>
					    <td> Deskripsi</td>
					    <td width="76%"><span style="color: #ff4d4d">
					      <?= $kerajinan->kerajinan_keterangan ?>
					    </span></td>
				      </tr>
					  </table>
				<div class="blog-img">
				  <!-- <img class="img-responsive" src="<?php //echo Url::to('@web/login/images/Agenda/'. $agenda->agenda_photoid)?>" alt=""> -->
			  </div>			            
						
		          </div>
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/kerajinan/']) ?>">
					<h3 class="title">Oleh-oleh Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listKerajinan2 as $k) { ?>
						<a href="<?= Url::to(['/kerajinan/baca?id='.$k->kerajinan_id]) ?>"><i class="fa fa-newspaper-o"></i> <?= StringHelper::truncateWords(strip_tags($k->kerajinan_usaha), 8)?></a>
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