 <?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Informasi Agenda di Kota Pariaman';
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
    <div class="container" style="width: 80%">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= Url::to(['/agenda/']) ?>">Agenda</a></li>
        </ul>
    </div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">
<div class="container" style="width: 90%">
    <div class="row">
        <main id="main" class="col-md-9">
            <div style="background-color: #800000;height: 50px;margin-top: 0px; margin-bottom: 15px;">
                <a href="#">
                <h3 style="padding: 10px; color: #FFF"> <i class="fa fa-building"></i> Agenda</h3>
                </a>
            </div>

            <div class="blog-inner area-padding">
                <div class="row">
                    <?php foreach ($allAgenda as $a) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 10px;">
                        <div class="single-blog">
                          <div class="single-blog-img" style="padding-bottom: 10px;">
                            <a href="blog.html" style="text-align: center;">
                                <img class="img-responsive" style="width: 300px; height: 150px"src="<?php echo Url::to('@web/login/images/Agenda/'. $a->agenda_photoid)?>" alt="">
                            </a>
                          </div>
                          <div class="blog-text">
                            <div style="height: 35px;overflow: hidden;">
                            <h4 style="font-size: 16px;">
                                <a href="blog.html"><?= StringHelper::truncateWords(strip_tags($a->agenda_nama), 10)?></a>
                            </h4>
                            </div>
                            <div style="height: 70px;overflow: hidden;">
                            <p style="font-size: 14px; text-align: justify; color: #354052">
                              <?= StringHelper::truncateWords(strip_tags($a->agenda_isi), 20)?>
                            </p>
                            </div>
                          </div>
                          <span>
                             <a style="padding: 5px;" href="<?= Url::to(['/agenda/baca']) ?>?id=<?= $a->agenda_id?>" class="outline-btn">Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
                          </span>
                        </div>
                      </div>
                     <?php } ?>

                    </div>
                        
                    <?php
                        echo LinkPager::widget([
                            'pagination' => $pageagenda,
                            'activePageCssClass' => 'current',
                            'nextPageLabel' => 'selanjutnya',
                            'prevPageLabel' => 'sebelumnya'
                        ]);
                    ?> 
                </div>
              </main>
              <aside id="aside" class="col-md-3">
                <div class="widget">
                    <a href="<?= Url::to(['/agenda/']) ?>"><h3 class="title">Agenda Lainnya</h3></a>
                    <div class="widget-category">
                        <?php foreach ($listAgenda as $a) { ?>
                        <a href="<?= Url::to(['/agenda/baca?id='.$a->agenda_id]) ?>"><i class="fa fa-calendar-plus-o"></i> <?= StringHelper::truncateWords(strip_tags($a->agenda_nama), 8)?></a>
                        <?php } ?>
                    </div>
                </div>
            </aside>
            </div>
        </div>

    </div>