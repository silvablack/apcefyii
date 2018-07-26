<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
     
    /* @var $this yii\web\View */
    /* @var $model app\models\ChangePasswordForm */
    /* @var $form ActiveForm */
     
    $this->title = 'Alterar senha';
    ?>
    <div class="user-changePassword col-md-4 col-xs-12 col-lg-4">
    <?php
        foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
        }
    ?>
     
        <?php $form = ActiveForm::begin(); ?>
     
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'confirm_password')->passwordInput() ?>
     
            <div class="form-group">
                <?= Html::submitButton('Alterar', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
     
    </div>