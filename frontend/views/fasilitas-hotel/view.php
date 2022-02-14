<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FasilitasHotel */

$this->title = $model->fh_id;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fasilitas-hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fh_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fh_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fh_id',
            'fh_hotel',
            'fh_ac',
            'fh_kolam_renang',
            'fh_tempat_parkir',
            'fh_wifi',
            'fh_restorant',
            'fh_resepsionis',
        ],
    ]) ?>

</div>
