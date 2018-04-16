<?php

use yii\helpers\Html;
use yii\grid\GridView;

//tambahan
use yii\helpers\ArrayHelper;
use common\models\Kendaraan;
use common\models\Jenis;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TarifSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Tarif';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarif', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'kendaraan.nopol',
            [
                'attribute' => 'kendaraan_id',
                'label' => 'No. Polisi',
                'value' => 'kendaraan.nopol',//nama relasi & field
                'filter' => ArrayHelper::map(Kendaraan::find()->all(),'id','nopol'),
            ],
            // [
            //     'attribute' => 'jenis_id',
            //     'label' => 'Merk',
            //     'value' => 'jenis.merk',//nama relasi & field
            //     'filter' => ArrayHelper::map(Jenis::find()->all(),'id','merk'),
            // ],
            'tarif_perhari',
            'tarif_overtime',
            //'kendaraan_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
