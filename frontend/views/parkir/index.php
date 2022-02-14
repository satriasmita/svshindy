 <?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Informasi Parkir di Kota Pariaman';
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
    <div class="container" style="width: 80%">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= Url::to(['/parkir/']) ?>">Parkir</a></li>
        </ul>
    </div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">
<div class="container" style="width: 90%">
    <div class="row">
        <main id="main" class="col-md-9">
            <div style="background-color: #800000;height: 50px;margin-top: 0px; margin-bottom: 15px;">
                <a href="#">
                <h3 style="padding: 10px; color: #FFF"> <i class="fa fa-building"></i> Parkir</h3>
                </a>
            </div>

            <div class="blog-inner area-padding">
                <div class="row">
                    <?php foreach ($allParkir as $p) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
                        <div class="single-blog">
                          <div class="single-blog-img" style="padding-bottom: 10px;">
                          </div>
                          <div class="blog-text">
                            <div style="height: 35px;overflow: hidden;">
                            <h4 style="font-size: 16px;">
                                <a href="blog.html"><?= StringHelper::truncateWords(strip_tags($p->p_nama), 10)?></a>
                            </h4>
                            </div>
                            <div style="height: 70px;overflow: hidden;">
                            <p style="font-size: 14px; text-align: justify; color: #354052">
                              <?= StringHelper::truncateWords(strip_tags($p->p_alamat), 20)?>
                            </p>
                            </div>
                          </div>
                        </div>
                      </div>
                     <?php } ?>

                    </div>
                        
                </div>
              </main>
            </div>
        </div>

    </div>