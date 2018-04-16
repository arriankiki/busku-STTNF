<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Pelanggan */

$this->title = 'Data Pelanggan';
// $this->params['breadcrumbs'][] = ['label' => 'Pelanggan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
