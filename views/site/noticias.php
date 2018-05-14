<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'APCEF - Associação do Pessoal da Caixa Econômica Federal';

?>
<!-- Page Heading & Breadcrumbs  -->
<div class="page-heading-breadcrumbs">
  <div class="container">
    <h2><?php echo $categoria ?></h2>
    <ul class="breadcrumbs">
      <li><?= Html::a('Home',['site/index']) ?></li>
      <li><?php echo $categoria ?></li>
    </ul>
  </div>
</div>
<!-- Page Heading & Breadcrumbs  -->

<!-- Blog -->
<div class="theme-padding white-bg">
  <div class="container">
    <div class="row">

      <!-- Blog Content -->
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7 r-full-width">

        <!-- Larg Blog View -->
        <div class="blog-lagre-view theme-padding-bottom">

          <?php
          if(count($model) > 0):
          foreach($model as $m):
          ?>
          <!-- Post Img -->
          <div class="large-post theme-padding-bottom">

            <!-- Post Img -->
            <div class="large-post-img">
              <?php
              foreach($m->noticiasImgs as $img):
              ?>
                <img style="width:100%;height:400px;" src="<?= Yii::getAlias('@web') ?>/images/gallery/<?= $img->src; ?>" alt="">
              <?php break;endforeach; ?>
              <span class="blog-title-batch"><?= $categoria ?></span>
            </div>
            <!-- Post Img -->

            <!-- Detail -->
            <div class="large-post-detail">
              <div class="author-header">
                <div class="aurhor-img-name pull-left">
                  <span>em <?= Yii::$app->formatter->asDate($m->data) ?> </span>
                </div>
              </div>
              <h2><?= Html::a($m->titulo,['#']) ?></h2>
              <p><?= StringHelper::truncate($m->noticia,440) ?></p>
              <?= Html::a('<i>+</i> leia mais',['site/noticia','id'=>$m->id], ['class'=>'btn gary-btn']) ?>
            </div>
            <!-- Detail -->

          </div>
          <!-- Post Img -->

        <?php endforeach;else: ?>
          <h3 class="text-center bg-info">NENHUMA NOTÍCIA ENCONTRADA</h3>
        <?php endif ?>
        </div>
        <!-- Larg Blog View -->

        <!-- Blog List View -->
        <div class="blog-list-View theme-padding-bottom">

          <!-- Pagination -->
          <?= yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
          <!-- Pagination -->

        </div>
        <!-- Blog List View -->

      </div>
      <!-- Blog Content -->

      <!-- Aside -->
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 r-full-width">

        <!-- Aside Widget -->
        <div class="aside-widget">
          <h3><span>Categorias</span></h3>
          <div class="top-categories">
            <ul>
              <li><?= Html::a('LIVRE PRATA', ['site/noticias','categoria'=>1]) ?></li>
              <li><?= Html::a('LIVRE OURO', ['site/noticias','categoria'=>2]) ?></li>
              <li><?= Html::a('QUARENTÃO', ['site/noticias','categoria'=>3]) ?></li>
              <li><?= Html::a('CINQUENTÃO', ['site/noticias','categoria'=>4]) ?></li>
            </ul>
          </div>
        </div>
        <!-- Aside Widget -->

      </div>
      <!-- Aside -->

    </div>
  </div>
</div>
<!-- Blog -->
