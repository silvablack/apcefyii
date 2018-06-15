<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Noticias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noticia')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'categoria')->dropDownList([1=>'LIVRE-PRATA', 2=>'LIVRE-OURO',3=>'QUARENTÃO',4=>'CINQUENTÃO']) ?>

    <?= $form->field($model, 'data')->hiddenInput(['value'=>Yii::$app->formatter->asDate('now','yyyy-MM-dd HH:mm:ss')])->label(false) ?>
    <?= $form->field($modelImg, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('Imagens') ?>
    
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
