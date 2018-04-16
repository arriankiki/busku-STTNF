<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model frontend\modules\berita\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>
    <?php //$form->field($model, 'deskripsi')->widget(CKEditor::className(), [
        //'options' => ['rows' => 6],
        //'preset' => 'basic'
    //]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>
    
    <?php //$form->field($model, 'isi')->widget(CKEditor::className(), [
        //'options' => ['rows' => 6],
        //'preset' => 'basic'
    //]) ?>

    <?php //$form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'created_at')->textInput() ?>

    <?php //$form->field($model, 'created_by')->textInput() ?>

    <?php //$form->field($model, 'updated_at')->textInput() ?>

    <?php //$form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
