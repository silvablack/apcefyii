<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetPainel;
use yii\helpers\StringHelper;

AppAssetPainel::register($this);
?>
<?php $this->beginPage() ?>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Painel adminisrativo campeonato apcef">
    <meta name="author" content="Paulo Siva">

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>
<?php if(!Yii::$app->user->isGuest): ?>
  <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a('Painel APCEF', ['painel/index'], ['class'=>'navbar-brand']) ?>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><?= Html::a('<i class="fa fa-sign-out fa-fw"></i> Sair', ['painel/logout'], ['data'=>[
                          'confirm'=>'Deseja sair?',
                          'method'=>'POST',
                          'params'=>[
                            Yii::$app->request->csrfParam => Yii::$app->request->csrfToken
                          ]
                          ]]) ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <?= Html::a('<i class="fa fa-dashboard fa-fw"></i> Dashboard', ['painel/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-table fa-fw"></i> Notícias', ['noticias/index']) ?>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
           <div class="row">
           <div style="margin-top:10px;">
                <?php
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'homeLink'=>[
                            'label' => 'Início',  // required
                            'url' => yii\helpers\Url::to(['painel/index']),      // optional, will be processed by Url::to()
                            
                        ]
                    ]);
                ?>
            </div>
               <?= $content ?>
           </div>
         </div>
         <?php $this->endBody() ?>
         </body>
         </html>
         <?php $this->endPage() ?>

<?php else: ?>
<div class="container">
<?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php endif ?>
