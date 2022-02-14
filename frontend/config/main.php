<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'Website PPID Kota Pariaman',
    'language'=>'id_ID',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'profil' => 'profil/index',
                'profil/index' => 'profil/index',
                'profil/<slug>' => 'profil/slug',
                'berita' => 'berita/index',
                'berita/index' => 'berita/index',
                'berita/cari-berita' => 'berita/cari-berita',
                'berita/<slug>' => 'berita/slug',
                'pengumuman' => 'pengumuman/index',
                'pengumuman/index' => 'pengumuman/index',
                'pengumuman/<slug>' => 'pengumuman/slug',
                'pelayanan/index' => 'pelayanan/index',
                'pelayanan/<slug>' => 'pelayanan/slug',
                'informasi' => 'informasi/index',
                'informasi/index' => 'informasi/index',
                'informasi/kat' => 'informasi/kat',
                'informasi/tahun' => 'informasi/tahun',
                'informasi/cari-informasi' => 'informasi/cari-informasi',
                'informasi/hit' => 'informasi/hit',
                'informasi/<slug>' => 'informasi/slug',
                'permohonan' => 'permohonan/index',
                'permohonan/index' => 'permohonan/index',
                'permohonan/request-sukses' => 'permohonan/request-sukses',
                'permohonan/detail' => 'permohonan/detail',
            ],
        ],
    ],
    'params' => $params,
];
