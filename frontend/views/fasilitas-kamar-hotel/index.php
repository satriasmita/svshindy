<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\views\FasilitasKamarHotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fasilitas Kamar Hotels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-kamar-hotel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fasilitas Kamar Hotel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fkh_id',
            'kh_id',
            'fkh_balkon',
            'fkh_coffe_maker',
            'fkh_ac',
            //'fkh_hot_water',
            //'fkh_wifi',
            //'fkh_sarapan',
            //'fkh_shower',
            //'fkh_tv',
            //'fkh_kulkas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
