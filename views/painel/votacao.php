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
            <li><?= $array[1]['label'] ?> / Total: <?= $array[1]['count'] ?> / <?= ($array[1]['count'] > 0) ? Yii::$app->formatter->asPercent(($array[1]['count'])/count($votacao),2):$array[1]['count'] ?></li>
            <li><?= $array[2]['label'] ?> / Total: <?= $array[2]['count'] ?> / <?= ($array[2]['count'] > 0) ? Yii::$app->formatter->asPercent(($array[2]['count'])/count($votacao),2):$array[2]['count'] ?></li>
            <li><?= $array[3]['label'] ?> / Total: <?= $array[3]['count'] ?> / <?= ($array[3]['count'] > 0) ? Yii::$app->formatter->asPercent(($array[3]['count'])/count($votacao),2):$array[3]['count'] ?></li>
        </ul>
    </div>
</div>