<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\base\DynamicModel;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Selamat Datang di Sistem Informasi Pariwisata Kota Pariaman';
?>
<?php
        \Yii::$app->view->registerMetaTag([
                'property' => 'og:title',
                'content' => 'Website Sistem Informasi Pariwisata Kota Pariaman'
            ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:description',
                  'content' => 'Selamat Datang di Website SIPAMAN Kota Pariaman, Novi Musnaldi, Novi, Informasi Publik, Diskominfo, Kominfo, Kota Pariaman'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:url',
                  'content' => 'http://sipaman.pariamankota.go.id/site/index'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:image',
                  'content' => 'http://ppid.pariamankota.go.id/images/logo-ppid.png'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:image:width',
                  'content' => '200'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:image:height',
                  'content' => '200'
              ]);
        ?>
<?php 

    // $model = new DynamicModel(['judul, kategori, tahun, tentang']);
    // $model->addRule('judul, kategori, tahun, tentang', 'safe');

?>
<style type="text/css">
    @media only screen and (max-width: 767px) {
        #berita {
            display: none;
        }
        #media-berita {
            display: none;
        }
    }
</style>

    <div id="blog" class="section">
        <!-- Container -->
        <div class="container" style="width: 80%">

            <!-- Row -->
            <div class="row">

                <!-- Main -->
                <main id="main" class="col-md-12">

                    <div class="col-md-6 col-md-12">
                        <div style="background-color: #800000;height: 50px;margin-top: 20px;">
                            <a href="<?= Url::to(['/destinasi-wisata/']) ?>"><h3 style="padding: 10px; color: #FFF"> <i class="fa fa-paper-plane"></i> Informasi Destinasi Wisata Terbaru</h3></a>
                        </div>
                        <div class="blog" style="margin-top: -30px;">

                        <?php foreach ($destinasi as $info) { ?>

                            <!-- blog author -->
                            <div class="blog-author">
                                <div class="media">
                                    <div id="media-berita" class="media-left" style="width: 30%">
                                        <img class="img-responsive" src="<?php echo Url::to('@web/login/images/Wisata/'. $info->foto)?>" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                             <h4 style="font-size: 18px; margin-bottom: 0px; font-weight: 525; color: #1657a7;"><?= StringHelper::truncateWords(strip_tags($info->nama_destinasi), 10)?></h4>
                                        <span style="background-color: #24a234" class="label bg-success"> Tahun <?= $info->tahun?></span> &ensp;
                                        </div>
                                        <p style="font-size: 15px;color: #443e3e"><?= StringHelper::truncateWords(strip_tags($info->detail), 20)?></p>
                                        <a style="padding: 5px;" href="<?= Url::to(['/destinasi-wisata/baca']) ?>?id=<?= $info->id_destinasi?>" class="outline-btn" >Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /blog author -->
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-12">
                        <div style="background-color: #4682B4;height: 50px;margin-top: 20px;">
                            <a href="<?= Url::to(['/hotel/']) ?>"><h3 style="padding: 10px; color: #FFF"> <i class="fa fa-building"></i> Informasi Hotel</h3> </a>
                        </div>
                        <div class="blog" style="margin-top: -30px;">
                            
                        <?php foreach ($hotel as $h) { ?>

                            <!-- blog author -->
                            <div class="blog-author">
                                <div class="media">
                                    <div id="media-berita" class="media-left" style="width: 30%">
                                        <img class="img-responsive" src="<?php echo Url::to('@web/login/images/Hotel/'. $h->foto)?>" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                             
                                             <h4 style="font-size: 18px; margin-bottom: 0px; font-weight: 525; color: #1657a7;"><?= StringHelper::truncateWords(strip_tags($h->h_nama), 10)?></h4>
                                        <span style="background-color: #24a234" class="label bg-success"> Tahun <?= $h->tahun?></span> &ensp;
                                        </div>
                                        <p style="font-size: 15px;color: #443e3e"><?= StringHelper::truncateWords(strip_tags($h->h_alamat), 20)?></p>
                                        <a style="padding: 5px;" href="<?= Url::to(['/hotel/baca']) ?>?id=<?= $h->hotel_id?>" class="outline-btn" >Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /blog author -->
                            <?php } ?>

                        </div>
                    </div>

                </main>
                <!-- /Main -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>