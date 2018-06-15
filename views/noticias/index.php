<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\StringHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NoticiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Noticias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias-index">

    <div class="col-lg-12">
        <h1 class="page-header"><?= $this->title ?></h1>
    </div>
    <!-- /.col-lg-12 -->
    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Nova Notícia'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            [
                'attribute'=>'noticia',
                'value'=>function($data){
                    return StringHelper::truncate($data->noticia,200);
                },
                'format'=>'html'
            ],
            [
                'attribute' => 'categoria',
                'value' => 'categoria0.categoria'
            ],
            [
                'attribute'=>'data',
                'value'=>function($data){
                    return Yii::$app->formatter->asDate($data->data,'php:d/m/Y H:i:s');
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
