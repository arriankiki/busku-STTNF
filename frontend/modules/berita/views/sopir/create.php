<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Sopir */

$this->title = 'Create Sopir';
$this->params['breadcrumbs'][] = ['label' => 'Sopir', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sopir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
