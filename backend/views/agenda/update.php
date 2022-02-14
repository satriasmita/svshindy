<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */

// $this->title = 'Update Agenda: ' . $model->agenda_id;
$this->title = 'Perbarui Data Agenda : '.StringHelper::truncateWords(strip_tags($model->agenda_nama), 5);
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->agenda_id, 'url' => ['view', 'id' => $model->agenda_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agenda-update">
<div class="box box-solid box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>

	    <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
</div>
