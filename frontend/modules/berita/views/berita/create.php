<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Berita */

$this->title = 'Create Berita';
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
