<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Votação';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-4 col-xs-12 col-lg-4">
        <ul>
            <li><?= $array[1]['label'] ?> / Total: <?= $array[1]['count'] ?> / <?= Yii::$app->formatter->asPercent(($array[1]['count'])/count($votacao),2) ?></li>
            <li><?= $array[2]['label'] ?> / Total: <?= $array[2]['count'] ?> / <?= Yii::$app->formatter->asPercent(($array[2]['count'])/count($votacao),2) ?></li>
            <li><?= $array[3]['label'] ?> / Total: <?= $array[3]['count'] ?> / <?= Yii::$app->formatter->asPercent(($array[3]['count'])/count($votacao),2) ?></li>
        </ul>
    </div>
</div>