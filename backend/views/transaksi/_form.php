<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

//tambahan
use yii\helpers\ArrayHelper;
use common\models\Kendaraan;
use common\models\Sopir;
use common\models\Pelanggan;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

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

    <?php //$form->field($model, 'kendaraan_id')->textInput() ?>
    <?php // $form->field($model, 'pelanggan_id')->textInput() ?>
    <?php //$form->field($model, 'sopir_id')->textInput() ?>
    <?php
    //ambil data dari modelnya
    if ($model->isNewRecord){
    $dataKendaraan = ArrayHelper::map(Kendaraan::find()->where(['status' => 'Bebas'])->asArray()->all(),'id','nopol');
     $dataSopir = ArrayHelper::map(Sopir::find()->where(['status' => 'Bebas'])->asArray()->all(),'id','nama');
    }else{
    $dataKendaraan = ArrayHelper::map(Kendaraan::find()->asArray()->all(),'id','nopol');
    
    $dataSopir = ArrayHelper::map(Sopir::find()->asArray()->all(),'id','nama');
    }

    

    $dataPelanggan = ArrayHelper::map(Pelanggan::find()->asArray()->all(),'id','nama');
    ?>
    <?= $form->field($model, 'kendaraan_id')->widget(Select2::classname(), [
            'data' => $dataKendaraan,
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Bus ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
    <?= $form->field($model, 'sopir_id')->widget(Select2::classname(), [
            'data' => $dataSopir,
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Sopir ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
    <?= $form->field($model, 'pelanggan_id')->widget(Select2::classname(), [
            'data' => $dataPelanggan,
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih Pelanggan ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>        
    

    <?php //$form->field($model, 'tgl_mulai')->textInput() ?>
    <?= $form->field($model, 'tgl_mulai')->widget(
        DatePicker::classname(),[
        'language' => 'id',
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
        ]] 
        );

    ?>

    <?php //$form->field($model, 'tgl_selesai')->textInput() ?>
    <?= $form->field($model, 'tgl_selesai')->widget(
        DatePicker::classname(),[
        'language' => 'id',
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
        ]]
        );

    ?>

    <?php //$form->field($model, 'tgl_overtime')->textInput() ?>
    <?= $form->field($model, 'tgl_overtime')->widget(
        DatePicker::classname(),[
        'language' => 'id',
        'options' => ['placeholder' => 'Pilih Tanggal'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
        ]]
        );

    ?>

    <?php //$form->field($model, 'status')->dropDownList([ 'Mulai' => 'Mulai', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'status')->radioList([ 'Mulai' => 'Mulai', 'Selesai' => 'Selesai', ], ['prompt' => ''])
    ?>
    
    <div class="">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
