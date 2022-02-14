<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'template/css/bootstrap.min.css',
        'template/css/owl.carousel.css',
        'template/css/owl.theme.default.css',
        'template/css/magnific-popup.css',
        'template/css/font-awesome.min.css',
        'template/css/style.css',
    ];
    public $js = [
        'template/js/jquery.min.js',
        'template/js/bootstrap.min.js',
        'template/js/owl.carousel.min.js',
        'template/js/jquery.magnific-popup.js',
        'template/js/main.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
