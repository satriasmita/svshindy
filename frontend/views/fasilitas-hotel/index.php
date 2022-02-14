<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FasilitasHotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fasilitas Hotels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-hotel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fasilitas Hotel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fh_id',
            'fh_hotel',
            'fh_ac',
            'fh_kolam_renang',
            'fh_tempat_parkir',
            //'fh_wifi',
            //'fh_restorant',
            //'fh_resepsionis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
