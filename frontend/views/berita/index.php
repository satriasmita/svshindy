<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Berita Kota Pariaman';
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
    <div class="container" style="width: 90%">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
            <li class="breadcrumb-item active"><a href="#">Berita</a></li>
        </ul>
    </div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">

        <!-- Container -->
        <div class="container" style="width: 90%">

            <!-- Row -->
            <div class="row">

                
              <!-- Start Blog Area -->
              <main id="main" class="col-md-9">

                <div style="background-color: #ff4d4d;height: 50px;margin-top: 0px; margin-bottom: 15px;">
                    <a href="#">
                        <h3 style="padding: 10px; color: #FFF"> <i class="fa fa-newspaper-o"></i> Berita Terbaru</h3>
                    </a>
                </div>

                <div class="blog-inner area-padding">
                    <div class="row">
                      <!-- Start Left Blog -->
                      <?php foreach ($allBerita as $news) { ?>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
                        <div class="single-blog">
                          <div class="single-blog-img" style="padding-bottom: 10px;">
                            <a href="blog.html" style="text-align: center;">
                                <img class="img-responsive" style="width: 300px; height: 150px"src="<?php echo Url::to('@web/login/images/Berita/'. $news->berita_foto)?>" alt="">
                            </a>
                          </div>
                          <div class="blog-meta" style="padding-bottom: 10px;">
                            <span style="background-color: #245fa9" class="label bg-primary"> <i class="fa fa-calendar"></i> <?= \common\components\MiscHelpers::tanggal($news->berita_tanggal)?> </span> &ensp;
                          </div>
                          <div class="blog-text">

                            <div style="height: 35px;overflow: hidden;">
                            <h4 style="font-size: 16px;">
                                <a href="blog.html"><?= StringHelper::truncateWords(strip_tags($news->berita_judul), 10)?></a>
                            </h4>
                            </div>
                            <div style="height: 70px;overflow: hidden;">
                            <p style="font-size: 14px; text-align: justify; color: #354052">
                              <?= StringHelper::truncateWords(strip_tags($news->berita_isi), 20)?>
                            </p>
                            </div>
                          </div>
                          <span>
                             <a style="padding: 5px;" href="<?= Url::to(['/berita/'.$news->slug]) ?>" class="outline-btn">Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
                          </span>
                        </div>
                        <!-- Start single blog -->
                      </div>
                     <?php } ?>
                      <!-- End Left Blog-->

                    </div>
                        
                    <?php
                        echo LinkPager::widget([
                            'pagination' => $pageberita,
                            'activePageCssClass' => 'current',
                            'nextPageLabel' => 'selanjutnya',
                            'prevPageLabel' => 'sebelumnya'
                        ]);
                    ?> 
                </div>
              </main>
              <!-- End Blog -->
              <aside id="aside" class="col-md-3">
                <div class="widget">
                    <a href="<?= Url::to(['/berita/']) ?>"><h3 class="title">Berita Lainnya</h3></a>
                    <div class="widget-category">
                        <?php foreach ($listBerita as $news) { ?>
                        <a href="<?= Url::to(['/berita/baca?id='.$news->berita_id]) ?>"><i class="fa fa-newspaper-o"></i> <?= StringHelper::truncateWords(strip_tags($news->berita_judul), 8)?></a>
                        <?php } ?>
                    </div>
                </div>
            </aside>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>