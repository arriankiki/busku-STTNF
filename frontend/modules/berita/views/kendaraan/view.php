<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Kendaraan */

$this->title = $model->nopol;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-view">

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

    <div class="row">
    <div class="col-md-8">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nopol',
            //'jenis_id',
            'jenis.merk',
            'tahun',
            'fasilitas:ntext',
            'status',
            //'foto',
        ],
    ]) ?>
    </div>
    <div class="col-md-4">

        <?php
        if(!empty($model->foto)){ //-------jika fotonya ada-----------
        ?>
        <center>  
        <img src="<?= Yii::$app->request->baseUrl; ?>/gambar/<?= $model->foto; ?>" width="80%" 
        class="img-thumbnail">
        </center>  
        <?php
        }
        else{ //---------------jika fotonya tidak ada-------------------
        ?>
        <center>
        <img src="<?= Yii::$app->request->baseUrl; ?>/gambar/nophoto.jpg" width="80%" 
        class="img-thumbnail">
        </center>
        <?php 
        } 
        
        ?>
        
        </div>
    </div>
</div>
