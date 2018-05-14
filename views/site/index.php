<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'APCEF - Associação do Pessoal da Caixa Econômica Federal';
?>
<!-- Match Detail -->
<section class="theme-padding-bottom bg-fixed">
  <div class="container">

    <!-- Match Detail Content -->
    <div class="match-detail-content theme-padding-top">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 theme-padding-bottom">
          <div class="row">
            <!-- Latest News -->
            <div class="col-lg-8 col-xs-12">
              <div class="latest-news-holder">
                <h3><span>últimas notícias</span></h3>

                <!-- latest-news Slider -->
                <div class="row no-gutters white-bg">

                  <!-- Slider -->
                  <div class="col-sm-9">
                    <ul id="latest-news-slider" class="latest-news-slider">
                      <?php foreach($lastnews as $v): ?>
                        <?php //var_dump($v->noticiasImgs); ?>
                      <li>
                        <?php foreach($v->noticiasImgs as $img): ?>
                      <img class="img-responsive" style="max-width:615px;max-height:358px;height:358px;" src="/images/gallery/<?php echo $img->src; ?>" alt="">
                      <?php break; endforeach; ?>
                        <p><?= StringHelper::truncate($v->titulo,25) ?>: <?= strip_tags(StringHelper::truncate($v->noticia,120)) ?>
                          <?= Html::a('Leia mais', ['site/noticia', 'id'=>$v->id]) ?></a></p>
                      </li>
                    <?php	endforeach; ?>
                    </ul>
                  </div>
                  <!-- Slider -->

                  <!-- Thumnail -->
                  <div class="col-sm-3">
                    <ul id="latest-news-thumb" class="latest-news-thumb">
                      <?php foreach($lastnews as $v): ?>
                      <li>
                        <p><?= substr($v->noticia,0,40) ?></p>
                        <span><?= $v->data ?></span>
                      </li>
                    <?php	endforeach; ?>
                    </ul>
                    <ul class="news-thumb-arrows">
                      <li class="prev"><span class="fa fa-angle-up"></span></li>
                      <li class="next"><span class="fa fa-angle-down"></span></li>
                    </ul>
                  </div>
                  <!-- Thumnail -->

                </div>
                <!-- latest-news Slider -->

              </div>
            </div>
            <!-- Latest News -->

            <!-- Upcoming Fixture -->
            <div class="col-lg-4 col-sm-12 col-xs-12 r-full-width">
              <h3><span><i class="red-color">PRÓXIMAS </i>PARTIDAS</span><a class="view-all pull-right" href="#"><i class="fa fa-angle-double-right"></i></a></h3>
              <div class="upcoming-fixture next-tb">
                <div class="table-responsive">
                  <table class="table text-center table-condensed" style="border-right:1px solid #CC0000;border-left:1px solid #CC0000;border-bottom:1px solid #CC0000;">
                      <tbody>
                        <!-- CODIGO PROXIMAS PARTIDAS -->
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Upcoming Fixture -->

          </div>
        </div>


<!-- Separator -->
<div class="container text-center">
  <span class="sprater"><i class="fa fa-futbol-o"></i></span>
</div>
<!-- Separator -->
</div>
</section>
<!-- Mtach Detail Content -->
