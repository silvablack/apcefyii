<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $this->title ?></h3>
                    </div>
                    <div class="panel-body">
                      <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options'=>['role'=>'form']
                        ]); ?>
                            <fieldset>
                              <?= $form->field($model, 'username')->textInput(['placeholder'=>'Usuário','autofocus' => true])->label(false) ?>
                              <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Senha'])->label(false) ?>
                              <?= Html::submitButton('Login', ['class' => 'btn btn-success btn-block', 'name' => 'login-button']) ?>
                            </fieldset>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
