<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Berita */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

        $username_created_by = $model->created_by;
        if($user = User::findIdentity($model->created_by)){
            $username_created_by = $user->username;
        }

        $username_updated_by = $model->updated_by;
        if($user = User::findIdentity($model->updated_by)){
            $username_updated_by = $user->username;
        }
        
?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'judul',
            'deskripsi:html',
            'isi:html',
            //'gambar',
            'created_at',
            //'created_by',
            [
                'attribute' => 'created_by',
                'value' => $username_created_by,
            ],
            //'updated_at',
            //'updated_by',
            /*[
                'attribute' => 'updated_by',
                'value' => $username_updated_by,
            ],*/
        ],
    ]) ?>

</div>
