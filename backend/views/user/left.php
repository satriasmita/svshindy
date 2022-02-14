<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\User;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Url::to('@web/images/logo.png')?>" class="img" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>rm -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Home', 'icon' => 'home','url' => ['/site/index']],
                    ['label' => 'Data RUTA', 'icon' => 'institution', 'url' => ['/data-bdt']],
                    ['label' => 'Data Keluarga Miskin', 'icon' => 'users', 'url' => ['/biodata-art/keluargamiskin']],
                    ['label' => 'Data Warga Miskin', 'icon' => 'user', 'url' => ['/biodata-art/wargamiskin']],      
                    ['label' => 'Data Bantuan', 'icon' => 'file', 'url' => ['/bantuan']], 
                	['label' => 'Usulan', 'icon' => 'folder', 'url' => ['/usulan']],
                    [
                        'label' => 'Search',
                        'icon' => 'search',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Lokasi', 'icon' => 'map', 'url' => ['/data-bdt/carilokasi']],
                            // ['label' => 'Pendidikan', 'icon' => 'map', 'url' => ['/biodata-art/caripendidikan']],
                            // ['label' => 'Pekerjaan', 'icon' => 'map', 'url' => ['/biodata-art/caripekerjaan']],
                            
                        ],
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
