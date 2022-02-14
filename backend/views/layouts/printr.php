<?php
use yii\helpers\Html;
use common\models\User;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */



if (class_exists('backend\assets\AppAsset')) {
    backend\assets\AppAsset::register($this);
} else {
    app\assets\AppAsset::register($this);
}

dmstr\web\AdminLteAsset::register($this);
// backend\assets\AppAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> / Aplikasi E-BPKB Kota Pariaman</title>
    <?php $this->head() ?>
    <style type="text/css">
        @media print{
            @page {size: landscape; margin-top: 20px; padding-left: 0px;}
            body
            {
              margin: 0px;
            }
            .table {
            border: 1px solid            
            }
            .table > thead > tr > th, 
            .table > tbody > tr > th, 
            .table > tfoot > tr > th, 
            .table > thead > tr > td, 
            .table > tbody > tr > td, 
            .table > tfoot > tr > td{
                padding: 4px;
                font-size: 12px;
                border: 1px solid
            }
            th {
                height: 40px;
                vertical-align: middle;
            }
        }
        hr {
            /*margin-top:-5px;*/
        }
        .table {
            border: 1px solid            
        }
        .table > thead > tr > th, 
        .table > tbody > tr > th, 
        .table > tfoot > tr > th, 
        .table > thead > tr > td, 
        .table > tbody > tr > td, 
        .table > tfoot > tr > td{
            padding: 4px;
            font-size: 12px;
            border: 1px solid
        }
        th {
            height: 40px;
            vertical-align: middle;
        }
    </style>
</head>

<body onload="window.print();">
<!--<body>-->
<?php $this->beginBody() ?>
    <div class="container" style="width:30cm; margin-top: 0.5cm">
        <!-- Main content -->
            <!-- title row -->
            
            <!-- <div style="margin-left:-1cm;"> -->
            <?= $content ?>
            </div>


            
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->



<?php $this->endBody() ?>
    
</body>
</html>
<?php $this->endPage() ?>
