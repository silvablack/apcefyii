<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Noticias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Atualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Você deseja excluir esta notícia?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo',
            'noticia:html',
            'categoria0.categoria',
            'data',
        ],
    ]) ?>
    <div class="row">
    <?php foreach($model->noticiasImgs as $i): ?>
        <div class="col-md-2 img-responsive" style="height:200px;margin:10px;overflow:hidden">
            <?= Html::img('@web/images/gallery/'.$i->src,['height'=>'200px']); ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>
