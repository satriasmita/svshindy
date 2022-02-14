<?php
    use yii\helpers\Html;
    use common\models\User;
    use yii\helpers\Url;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Url::to('@web/images/logo.png')?>" class="img" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p style="font-size:14px;font-family: Bookman old style;"><b>TripAdvisor<br><small>Kota Pariaman</small></b></p>
                <a href="#"><i class="fa fa-circle text-success"></i><?php echo Yii::$app->user->identity->username; ?></a>
            </div>
        </div>
        <!-- /.search form -->
        <?php if (Yii::$app->user->identity->level == 1) : ?>
        <?= dmstr\widgets\Menu::widget(
        [
            'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            'items' => [
                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                [
                    'label' => 'Beranda',
                    'icon' => 'home',
                    'url' => ['/'],
                ],

                ['label' => 'Destinasi', 'icon' => 'paper-plane', 'url' => ['/destinasi-wisata'],],
                ['label' => 'Kuliner', 'icon' => 'beer', 'url' => ['/kuliner'],],
                ['label' => 'Agenda', 'icon' => 'calendar-plus-o', 'url' => ['/agenda'],],
                ['label' => 'Restoran / Rumah Makan', 'icon' => 'cutlery', 'url' => ['/restoran'],],
                ['label' => 'Oleh-oleh', 'icon' => 'gift', 'url' => ['/kerajinan'],],                
                ['label' => 'Berita', 'icon' => 'newspaper-o', 'url' => ['/berita'],],
                ['label' => 'Parkir', 'icon' => 'car', 'url' => ['/parkir'],],
                // ['label' => 'Akses ke Pariaman', 'icon' => 'car', 'url' => ['/akses'],],
                [
                    'label' => 'Data Hotel',
                    'icon' => 'folder-open',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Hotel', 'icon' => 'building', 'url' => ['/hotel'],],
                        ['label' => 'Fasilitas Hotel', 'icon' => 'wifi', 'url' => ['/fasilitas-hotel'],],
                        ['label' => 'Kamar Hotel', 'icon' => 'hotel', 'url' => ['/kamar-hotel'],],
                        ['label' => 'Fasillitas Kamar Hotel', 'icon' => 'tv', 'url' => ['/fasilitas-kamar-hotel'],],
                        ['label' => 'Kategori Kamar', 'icon' => 'building', 'url' => ['/kategori-kamar'],],
                        ['label' => 'Kategori Bed', 'icon' => 'bed', 'url' => ['/kategori-bed'],],
                            ],
                ],
                ['label' => 'Pemesanan Hotel', 'icon' => 'credit-card', 'url' => ['/pemesanan'],],
                [
                    'label' => 'Fasilitas Umum',
                    'icon' => 'folder-open',
                    'url' => '#',
                    'items' => [
                        ['label' => 'ATM', 'icon' => 'bank', 'url' => ['/atm'],],
                        ['label' => 'Masjid', 'icon' => 'building', 'url' => ['/masjid'],],
                        ['label' => 'SPBU', 'icon' => 'building', 'url' => ['/spbu'],],
                        ['label' => 'Parkir', 'icon' => 'building', 'url' => ['/parkir'],],
                        ['label' => 'Rumah Sakit', 'icon' => 'building', 'url' => ['/rs'],],
                    ],
                ],
                ['label' => 'Setting Akun', 'icon' => 'gears', 'url' => ['/user'],],

                ],
            ]
        ) ?>

        <?php elseif (Yii::$app->user->identity->level == 2) : ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Beranda',
                        'icon' => 'home',
                        'url' => ['/'],
                    ],

                ['label' => 'Destinasi', 'icon' => 'file-text-o', 'url' => ['/destinasi-wisata'],],

                ],

            ]
        ) ?>
        <?php elseif (Yii::$app->user->identity->level == 3) : ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Beranda',
                        'icon' => 'home',
                        'url' => ['/'],
                    ],

                ['label' => 'Destinasi', 'icon' => 'file-text-o', 'url' => ['/destinasi-wisata'],],


                ],
            ]
        ) ?>
        <?php elseif (Yii::$app->user->identity->level == 4) : ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Beranda',
                        'icon' => 'home',
                        'url' => ['/'],
                    ],

              
                ],
            ]
        ) ?>
        <?php endif; ?>

    </section>

</aside>

    </section>

</aside>
