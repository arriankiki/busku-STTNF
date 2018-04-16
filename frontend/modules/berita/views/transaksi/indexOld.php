<?php

use yii\helpers\Html;
use yii\grid\GridView;

//tambahan
use yii\helpers\ArrayHelper;
use common\models\Kendaraan;
use common\models\Pelanggan;
use common\models\Sopir;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\berita\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Mulai Order Bus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            // 'kendaraan_id',
            // 'pelanggan_id',
            // 'sopir_id',
            [
                'attribute' => 'kendaraan_id',
                'label' => 'No. Polisi',
                'value' => 'kendaraan.nopol',//nama relasi & field
                'filter' => ArrayHelper::map(Kendaraan::find()->all(),'id','nopol'),
            ],
            //'pelanggan_id',
            [
                'attribute' => 'pelanggan_id',
                'label' => 'Nama Pelanggan',
                'value' => 'pelanggan.nama',//nama relasi & field
                'filter' => ArrayHelper::map(Pelanggan::find()->all(),'id','nama'),
            ],
            //'sopir_id',
            [
                'attribute' => 'sopir_id',
                'label' => 'Nama Sopir',
                'value' => 'sopir.nama',//nama relasi & field
                'filter' => ArrayHelper::map(Sopir::find()->all(),'id','nama'),
            ],
            'tgl_mulai',
            'tgl_selesai',
            // 'tgl_overtime',
            // 'status',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
