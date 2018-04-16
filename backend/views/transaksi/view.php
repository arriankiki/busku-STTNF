<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\Kendaraan;
use common\models\Pelanggan;
use common\models\Sopir;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */

$this->title = $model->pelanggan->nama.' - '.$model->kendaraan->nopol;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            //'id',
            //'kendaraan_id',
            'kendaraan.nopol',
            //'pelanggan_id',
            'pelanggan.nama',
            //'sopir_id',
            'sopir.nama',
            'tgl_mulai',
            'tgl_selesai',
            'tgl_overtime',
            'status',
        ],
    ]) ?>

</div>
