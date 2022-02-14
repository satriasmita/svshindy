<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

backend\assets\LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php 
    \Yii::$app->view->registerMetaTag([
        'property' => 'og:title',
        'content' => 'Login Administrator Aplikasi E-SURAT Kota Pariaman'
    ]);
	\Yii::$app->view->registerMetaTag([
	        'property' => 'og:description',
	        'content' => 'Selamat Datang di Aplikasi E-SURAT Online Kota Pariaman'
	    ]);
	\Yii::$app->view->registerMetaTag([
	        'property' => 'og:url',
	        'content' => 'http://esurat.pariamankota.go.id/site/index'
	    ]);
	\Yii::$app->view->registerMetaTag([
	        'property' => 'og:image',
	        'content' => 'http://esurat.pariamankota.go.id/admin/images/logo.png'
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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
