<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'login/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'login/css/util.css',
        'login/css/main.css',
    ];
    public $js = [
        'login/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
