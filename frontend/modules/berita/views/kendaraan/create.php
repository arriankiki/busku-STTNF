<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Kendaraan */

$this->title = 'Create Kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
