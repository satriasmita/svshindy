<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = $profil->prof_judul;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/profil/']) ?>">Profil</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= $profil->prof_judul?></a></li>
			
		</ul>
	</div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">

		<!-- Container -->
		<div class="container" style="width: 80%">

			<!-- Row -->
			<div class="row">



				<!-- Aside -->
				<aside id="aside" class="col-md-3">

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
						<h3 class="title">Profil PPID Kota Pariaman</h3>
						<div class="widget-category">
							<?php foreach ($listProf as $allprof) { ?>
							<a href="<?= Url::to(['/profil/'.$allprof->slug]) ?>"><i class="fa fa-star"></i> <?= $allprof->prof_judul ?></a>
                            <?php } ?>
						</div>
					</div>
					<!-- /Category -->

				</aside>
				<!-- /Aside -->
				<!-- Main -->
				<main id="main" class="col-md-9">

					<div style="background-color: #167aa7;height: 50px;margin-top: 0px; margin-bottom: 15px;">
                        <a href="#">
                        	<h3 style="padding: 10px; color: #FFF"> <i class="fa fa-star"></i> <?= $profil->prof_judul?></h3>
                        </a>
                    </div>
					<div class="blog-img">
							<img class="img-responsive" src="<?php echo Url::to('@web/adm/files/profil/'. $profil->prof_gambar)?>" alt="">
						</div><br>
			            <div style="font-size: 15px; text-align: justify; color: #354052"><?= $profil->prof_isi ?>
						</div>

			        </div>
				</main>
				<!-- /Main -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>