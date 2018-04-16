<?php

use yii\helpers\Html;
use yii\grid\GridView;

//tambahan
use yii\helpers\ArrayHelper;
use common\models\Jenis;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\berita\models\KendaraanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kendaraan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Kendaraan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nopol',
            //'jenis_id',
            [
                //'attribute' => 'jenis_id',
                'label' => 'Merk',
                'value' => 'jenis.merk',//nama relasi & field
                //'filter' => ArrayHelper::map(Jenis::find()->all(),'id','merk'),
            ],
            [
                //'attribute' => 'jenis_id',
                'label' => 'Seat',
                'value' => 'jenis.seat',//nama relasi & field
                //'filter' => ArrayHelper::map(Jenis::find()->all(),'id','seat'),
            ],
            [
                'attribute' => 'jenis_id',
                'label' => 'Tipe',
                'value' => 'jenis.tipe',//nama relasi & field
                'filter' => ArrayHelper::map(Jenis::find()->all(),'id','tipe'),
            ],
            'tahun',
            //'fasilitas:ntext',
            [
                'attribute' => 'status',
                'label' => 'Status',
                'value' => 'status',
                'filter' => ['Bebas'=>'Bebas','Jalan'=>'Jalan'],
            ],
            // 'status',
            // 'foto',

            //['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
