<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use backend\models\Alamat;
use backend\models\Pelayanan;
use backend\models\Profil;
use backend\models\Sm;
use backend\models\KatInformasi;
use yii\base\DynamicModel;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

AppAsset::register($this);
$this->title = 'Welcome to Website Sharing Vision Shindy';
$range = range(date('Y'), 2002);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
      html *
        {
           /*font-size: 1em !important;*/
           /*color: #000 !important;*/
           font-family: Roboto;
        }
    </style>
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <?php if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') : ?>
    <header id="home">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('wisata/images/b1.jpg');">
            <!-- <div class="overlay"></div> -->
        </div>
        <!-- /Background Image -->
    <?php else : ?>
    <header>
    <?php endif; ?>

        <!-- Nav -->
        <?php if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') : ?>
        <nav id="nav" class="navbar nav-transparent" >
        <?php else : ?>
        <nav id="nav" class="navbar">
        <?php endif; ?>
            <div class="container">

                <div class="navbar-header" >
                    <!-- Logo -->
                    <div class="navbar-brand">
                        
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right" >
                    <li ><a class="fa fa-home" style="font-weight: 550; font-size: 17px; " href="<?= Url::to(['/site/']) ?>"> Beranda</a></li>   
                    <li ><a class="fa fa-paper-plane" style="font-weight: 550; font-size: 17px;" href="<?= Url::to(['/posts/']) ?>"> Posts</a></li>
                    <li ><a class="fa fa-mail-reply-all" style="font-weight: 550; font-size: 17px;" href="<?= Url::to(['/login/site/login/']) ?>">  Login</a></li>
                    
                </ul>
                <!-- /Main navigation -->

            </div>


        </nav>
        <!-- /Nav -->

        <?php if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') : ?>
        <!-- home wrapper -->
        <div class="home-wrapper">
                <h2 style="font-size: 70px; color: #ffffff    ; font-family: Garamond;"> Welcome to </h2>
                <h2 style="font-size: 70px; color: #ffffff    ; font-family: Garamond;"> Website Sharing Vision Shindy </h2>
            <div class="container">
                <div class="row">
                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        
                    </div>

                    <!-- /home content -->
                </div>
            </div>
        </div>

        <!-- /home wrapper -->
        <?php endif; ?>

    </header>

        <?= Alert::widget() ?>
        <?= $content ?>
    
    <footer id="footer" class="sm-padding" style="background-color: #DAD5D5">
        <div class="container">
        <table width="100%" border="0" style="padding-left: 25px; padding-right:25px" >
         
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="row" style="padding-top: 30px">
            <div class="footer-content">
                
            </div>
        </div>
    </div>


        <!-- Container -->
        <div class="container">

            <!-- Row -->

            <div class="row">
       <!--  </div> -->
            <div class="row" style="padding-top: 30px">
              <!-- <div class="col-md-8 col-sm-8 col-xs-12"> -->
                <div class="footer-content">
                  <div class="footer-head">
                    <div class="footer-icons">
                    </div>
                  </div>
                  
                  
                </div>
              </div>
          </div>
                <div class="col-md-12" style="margin-top: 25px;">
                    <div class="footer-copyright">
                        <p style="color: #151821 ">Copyright © 2022. Shindy Satriasmita </p>
                    </div>
                    <!-- Novi Musnaldi -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>


    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
