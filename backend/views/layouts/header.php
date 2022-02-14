<?php
use yii\helpers\Html;
use common\widgets\Alert;
use yii\helpers\Url;
use common\models\User;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <!-- <?= Html::a('<span class="logo-mini">TripAdvisor</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?> -->

    <?= Html::a('<span class="logo-mini">Trip</span><span class="logo-lg">' . 'TripAdvisor' . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="">
                    <a href="<?php echo Url::to(['/user/password'])?>" data-method="post" >
                        <i class="fa fa-key"></i>
                        Ganti Password
                    </a>
                </li>
                <li class="">
                    <a href="<?= Url::to(['/site/logout'])?>" data-method="post" >
                        <i class="fa fa-sign-out"></i>
                        Logout (<?php echo Yii::$app->user->identity->username; ?>)
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>