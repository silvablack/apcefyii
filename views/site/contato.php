<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contato - APCEF';
$this->params['breadcrumbs'][] = Html::encode($this->title);
$this->params['noticias'] = $noticias;
?>
<!-- Contact Form Holder -->
  <div class="theme-padding-top theme-padding-bottom">
    <div class="container">
      <h2>ENTRE EM CONTATO</h2>
      <div class="row">

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Obrigado por entrar em contato. Retornaremos assim que possível.
            </div>

            <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                    Because the application is in development mode, the email is not sent but saved as
                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                    application component to be false to enable email sending.
                <?php endif; ?>
            </p>

        <?php else: ?>


                    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options'=>['class'=>'col-sm-6 contact-form']],['name'=>'form_contato']); ?>

                        <?= $form->field($model, 'name', ['inputTemplate'=>"{input} <i class='fa fa-user'></i>"])
                        ->textInput(['autofocus' => true,'placeholder'=>'Nome'])->label(false) ?>

                        <?= $form->field($model, 'email', ['inputTemplate'=>"{input} <i class='fa fa-envelope'></i>"])
                        ->textInput(['placeholder'=>'Email *'])->label(false) ?>

                        <?= $form->field($model, 'subject', ['inputTemplate'=>"{input} <i class='fa fa-pencil-square-o'></i>"])
                        ->textInput(['placeholder'=>'Título'])->label(false) ?>

                        <?= $form->field($model, 'body', ['inputTemplate'=>"{input} <i class='fa fa-pencil-square-o'></i>"])
                        ->textarea(['rows' => 6,'placeholder'=>'Escreva sua mensagem aqui...','class'=>"form-control style-d"])->label(false) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Enviar', ['class' => 'btn red-btn pull-right', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
        <?php endif; ?>
      </div>
    </div>
    <!-- Separator -->
    <div class="container text-center">
      <span class="sprater"><i class="fa fa-futbol-o"></i></span>
    </div>
    <!-- Separator -->
  </div>
  <!-- Contact Form Holder -->
