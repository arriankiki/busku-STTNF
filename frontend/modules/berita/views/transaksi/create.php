<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Transaksi */

$this->title = 'Pesan Penyewaan Bus';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
