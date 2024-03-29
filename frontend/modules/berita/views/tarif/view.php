<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\modules\models\Kendaraan;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Tarif */

$this->title = $model->kendaraan->nopol;
$this->params['breadcrumbs'][] = ['label' => 'Tarif', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /*Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])*/ ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'kendaraan.nopol',
            'tarif_perhari',
            'tarif_overtime',
            
        ],
    ]) ?>

</div>
