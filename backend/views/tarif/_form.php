<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

//tambahan
use yii\helpers\ArrayHelper;
use common\models\Kendaraan;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Tarif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-form">

    <?php $form = ActiveForm::begin([
        //'options'=>['enctype'=>'multipart/form-data'],
        'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-4',
                    'error' => '',
                    'hint' => '',
                ],
            ],
    ]); ?>

    <?php
    //ambil data dari modelnya
    $dataKendaraan = ArrayHelper::map(Kendaraan::find()->asArray()->all(),'id','nopol');
    ?>

    <?= $form->field($model, 'tarif_perhari')->textInput() ?>

    <?= $form->field($model, 'tarif_overtime')->textInput() ?>

    <?php //$form->field($model, 'kendaraan_id')->textInput() ?>

    <?= $form->field($model, 'kendaraan_id')->widget(Select2::classname(), [
            'data' => $dataKendaraan,
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Bus ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div> 
