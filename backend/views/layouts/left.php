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
                <img src="<?php echo Url::to('@web/images/admin.png')?>" class="img" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p style="font-size:14px;font-family: Bookman old style;"><b>Sharing Vision<br><small></small></b></p>
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

                ['label' => 'Posts', 'icon' => 'file-text-o', 'url' => ['/posts'],],


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
