<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
use app\assets\AppNewsAsset;
AppNewsAsset::register($this);
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'APCEF - Associação do Pessoal da Caixa Econômica Federal';



$this->registerCss('
  .slick-prev::before, .slick-next::before{
    color: black !important;
  }
');

$this->registerJs("
  $('.single-item').removeClass('hidden');
  $('.single-item').slick({
    infinite: true,
    autoplay: true,
    speed: 300,
    arrows: true,
    dots: true
  });
", yii\web\View::POS_LOAD, 'slickconf');


?>

<!-- Blog Detail -->
<div class="theme-padding white-bg">
  <div class="container">
    <div class="row">

      <!-- Blog Content -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <!-- Blog detail -->
        <div class="blog-detail-holder">
          <div class="author-header">
            <h2><?= $model->titulo ?></h2>
            <div class="aurhor-img-name pull-left">
              <span><?= date_format(date_create($model->data), 'm/d/Y H:i:s') ?> </span>
            </div>
            <div class="share-option pull-right">
            </div>
          </div>
          <div class="blog-detail">
            <div class="col-lg-8 col-md-8">
                <div class="single-item hidden" style="height:400px;">
                  <?php
                  foreach($model->noticiasImgs as $img):
                  ?>
                  <div class="col-lg-12 col-md-12" style="height:400px;" data-src="<?= Yii::getAlias('@web') ?>/images/gallery/<?= $img->src; ?>">
                    <img style="width:100%;height:100%;" src="<?= Yii::getAlias('@web') ?>/images/gallery/<?= $img->src; ?>" />
                  </div>
                <?php endforeach ?>
                </div>
          </div>
            <article>
              <?php echo $model->noticia ?>
            </article>
          </div>
          <div class="tags-holder">
          </div>
        </div>
        <!-- Blog Detail -->

      </div>
    <!-- Blog Content -->

    <!-- Aside -->
      <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 theme-padding">

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
<!-- Blog Detail -->
