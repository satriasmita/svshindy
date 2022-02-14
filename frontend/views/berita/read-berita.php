<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = $berita->berita_judul;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/berita/']) ?>">Berita</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($berita->berita_judul), 5)?></a></li>
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
					<h3 style="color: #ff4d4d"><?= $berita->berita_judul ?></h3>
			          <div class="blog-img">
							<img class="img-responsive" style="width: 300px; height: 150px"src="<?php echo Url::to('@web/login/images/Berita/'. $berita->berita_foto)?>" alt="">
						</div>
						<div class="blog-meta" style="padding: 10px;">
			                <span style="background-color: #245fa9" class="label bg-primary"> <i class="fa fa-calendar"></i> <?= \common\components\MiscHelpers::tanggal($berita->berita_tanggal)?> </span> &ensp;
			              </div>
			            <div style="font-size: 15px; text-align: justify; color: #354052"><?= $berita->berita_isi ?>
						</div>

			        </div>
			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<!-- Search -->
				<!-- <div class="widget">
					<div class="widget-search">
						<input class="search-input" type="text" placeholder="search">
						<button class="search-btn" type="button"><i class="fa fa-search"></i></button>
					</div>
				</div> -->
				<!-- /Search -->

				<!-- Category -->
				<div class="widget">
					<a href="<?= Url::to(['/berita/']) ?>"><h3 class="title">Berita Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listBerita as $news) { ?>
						<a href="<?= Url::to(['/berita/'.$news->slug]) ?>"><i class="fa fa-newspaper-o"></i> <?= StringHelper::truncateWords(strip_tags($news->berita_judul), 8)?></a>
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