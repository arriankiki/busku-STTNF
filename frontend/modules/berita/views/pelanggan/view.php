<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Pelanggan */

$this->title = $model->nama;
//$this->params['breadcrumbs'][] = ['label' => 'Pelanggan', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-view">

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
        <?= Html::a('Mulai Order Bus', ['/berita/transaksi/create'], ['class'=>'btn btn-primary pull-left'])?>

    </p>
    <?php echo '<br/><br/>' ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nama',
            'alamat:ntext',
            'telepon',
        ],
    ]) ?>

</div>
