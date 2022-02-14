<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Kuliner;

/* @var $this yii\web\View */

$kuliner = Kuliner::find()->where(['status' => 1,'id_kuliner' => $id])->one();
$listKuliner = Kuliner::find()->where(['status' => 1])->one();
$listKuliner2 = Kuliner::find()->all();
$this->title = $kuliner->nama;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/kuliner/']) ?>">Kuliner</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($kuliner->nama), 5)?></a></li>
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
					<h3 style="color: #ff4d4d"><?= $kuliner->nama ?></h3>
			          <div class="blog-img">
							<img class="img-responsive" src="<?php echo Url::to('@web/login/images/Kuliner/'. $kuliner->foto)?>" alt="">
							                                                                           

						</div>			            
						<div style="font-size: 15px; text-align: justify; color: #354052"><?= $kuliner->keterangan ?>
						</div>
			        </div>
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">
				<div class="widget">
					<a href="<?= Url::to(['/kuliner/']) ?>"><h3 class="title">kuliner Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listKuliner2 as $k) { ?>
						<a href="<?= Url::to(['/kuliner/baca?id='.$k->id_kuliner]) ?>"><i class="fa fa-newspaper-o"></i> <?= StringHelper::truncateWords(strip_tags($k->nama), 8)?></a>
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