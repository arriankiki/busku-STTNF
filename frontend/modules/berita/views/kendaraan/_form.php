<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//tambahan
use yii\helpers\ArrayHelper;
use common\models\Kendaraan;
use common\models\Jenis;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Kendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data'],
        'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-1',
                    'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-4',
                    'error' => '',
                    'hint' => '', 
                ],
            ],
    ]); ?>

    <?= $form->field($model, 'nopol')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'jenis_id')->textInput() ?>

    <?php
    //ambil data jenis dari modelnya
    $dataJenis = ArrayHelper::map(Jenis::find()->asArray()->all(),'id','tipe');
    ?>

    <?php 
    /*
    $form->field($model, 'jenis_id')->dropDownList(
        $dataJenis
        , ['prompt' => '---------Pilih Jenis---------']) */?>

     <?= $form->field($model, 'jenis_id')->widget(Select2::classname(), [
    'data' => $dataJenis,
    'language' => 'id',
    'options' => ['placeholder' => '--- Pilih Jenis ---'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'fasilitas')->textarea(['rows' => 6]) ?>

    <?php
    //ambil data fasilitas dari modelnya
    $data = Kendaraan::getFasilitas();
    ?>
    <?= $form->field($model, 'fasilitas')->checkboxList($data) ?>

    <?php //$form->field($model, 'status')->dropDownList([ 'Bebas' => 'Bebas', 'Jalan' => 'Jalan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->radioList([ 'Bebas' => 'Bebas', 'Jalan' => 'Jalan', ], ['prompt' => ''])
    ?>

    <?php //$form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotoFile')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
