<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\base\DynamicModel;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Welcome to Website Sharing Vision Shindy';
?>
<?php
        \Yii::$app->view->registerMetaTag([
                'property' => 'og:title',
                'content' => 'Welcome to Website Sharing Vision Shindy'
            ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:description',
                  'content' => 'Welcome to Website Sharing Vision Shindy'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:url',
                  'content' => 'Welcome to Website Sharing Vision Shindy'
              ]);
          \Yii::$app->view->registerMetaTag([
                  'property' => 'og:image',
                  'content' => 'Welcome to Website Sharing Vision Shindy'
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

                    <div class="col-md-12">
                        <div style="background-color: #800000;height: 50px;margin-top: 20px;">
                            <a href="<?= Url::to(['/posts/']) ?>"><h3 style="padding: 10px; color: #FFF"> <i class="fa fa-paper-plane"></i> Postingan</h3></a>
                        </div>
                        <div class="blog" style="margin-top: -30px;">

                        <?php foreach ($pos as $info) { ?>

                            <!-- blog author -->
                            <div class="blog-author">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="media-heading">
                                             <h4 style="font-size: 18px; margin-bottom: 0px; font-weight: 525; color: #1657a7;"><?= StringHelper::truncateWords(strip_tags($info->title), 10)?></h4>
                                        </div>
                                        <p style="font-size: 15px;color: #443e3e"><?= StringHelper::truncateWords(strip_tags($info->content), 20)?></p>
                                        <a style="padding: 5px;" href="<?= Url::to(['/posts/baca']) ?>?id=<?= $info->id?>" class="outline-btn" >Selengkapnya <i class="fa fa-fw fa-arrow-circle-right"></i></a>
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