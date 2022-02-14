<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Masuk Ke Aplikasi';
?>
<style type="text/css">


    @font-face {
      font-family: Linearicons-Free;
      src: url('../login/fonts/Linearicons-Free-v1.0.0/WebFont/Linearicons-Free.ttf'); 
    }

    .center {
    margin:auto;
}
</style>
<div class="limiter">
    <div class="container-login100" style="background-image: url('../login/images/bg3.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <center>
                <img src="<?php echo Url::to('@web/images/logo.png')?>" alt="Logo-Kota" style="width:100px;">
            </center><br>
                
            <center> <h2 style="color:white;">TRIPADVISOR KOTA PARIAMAN</h2>
            </center><br>
            <!-- <span class="login100-form-title p-b-41">
                Masukkan <br>Username dan Password
            </span> -->
            <div style="width: 400px;" class="center">
            <?php $form = ActiveForm::begin(['options' => ['class' => 'login100-form validate-form p-b-33 p-t-5']]); ?>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <?= Html::activeInput('text', $model, 'username', ['class' => 'input100',  'placeholder' => 'User Name']) ?>
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <?= Html::activeInput('password', $model, 'password', ['class' => 'input100','placeholder' => 'Password']) ?>
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                     <?= Html::submitButton('Login', ['class' => 'login100-form-btn']) ?>
                </div>

            <?php ActiveForm::end(); ?>
           </div>


        <br>
        <br>
        <?php if (Yii::$app->session->hasFlash('failure')): ?>
        <div class="alert alert-warning" style="font-size: 16px;">
            <center><?= Yii::$app->session->getFlash('failure') ?></center>
        </div>
        <?php endif; ?>
        </div>
    </div>
</div>