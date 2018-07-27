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
    <div class="match-detail-content" style="padding-top:2vh;">
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
                        <p><?= StringHelper::truncate($v->titulo,20) ?>: <?= StringHelper::truncate(strip_tags($v->noticia),110) ?>
                          <?= Html::a('Leia mais', ['site/noticia', 'id'=>$v->id]) ?></a></p>
                      </li>
                    <?php	endforeach; ?>
                    </ul>
                  </div>
                  <!-- Slider -->

                  <!-- Thumnail -->
                  <div class="col-sm-3">
                    <ul id="latest-news-thumb" class="latest-news-thumb latest-news-thumb-desktop">
                      <?php foreach($lastnews as $v): ?>
                      <li>
                        <p><?= StringHelper::truncate(strip_tags($v->noticia),35) ?></p>
                        <span><?= Yii::$app->formatter->asDate($v->data) ?></span>
                      </li>
                    <?php	endforeach; ?>
                    </ul>
                    <ul class="news-thumb-arrows">
                      <li class="prev"><span class="fa fa-angle-up"></span></li>
                      <li class="next"><span class="fa fa-angle-down"></span></li>
                    </ul>
                  </div>
                  <!-- Thumnail -->
                  
                <!-- latest-news Slider -->

              </div>
            </div>
            <!-- Latest News -->

            <!-- SIDEBAR BOX -->
            <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-10" style="margin-top:10px;">
                        <p style="font-weight:bold;text-transform:uppercase">Baixe nosso aplicativo</p>
                        <a target="_blank" href='https://play.google.com/store/apps/details?id=br.com.goldeplacama.android&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                        <img style="width:100%;" alt='Disponível no Google Play'
                            src='https://play.google.com/intl/en_us/badges/images/generic/pt-br_badge_web_generic.png'/>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-10" style="margin-top:4em;">
                    <?= Html::a(Html::img('@web/media-files/apcef-saude.png'),'http://apcefsaudema.com.br/',['target'=>'_blank']) ?>
                    </div>
                    <div class="col-md-3 col-lg-4 col-xs-10" style="margin-top:4em">
                      <?= Html::a(Html::img('@web/media-files/goldeplaca.png'),'http://www.goldeplacama.com.br',['target'=>'_blank']) ?>
                    </div>
                  </div>

                </div>

            <!-- Upcoming Fixture -->
            <div class="col-lg-4 col-sm-12 col-xs-12 r-full-width">
              <h3><span><i class="red-color">PRÓXIMAS </i>PARTIDAS</span><a class="view-all pull-right" href="#"><i class="fa fa-angle-double-right"></i></a></h3>
              <div class="upcoming-fixture next-tb">
                <div class="table-responsive">
                  <table class="table text-center table-condensed" style="border-right:1px solid #CC0000;border-left:1px solid #CC0000;border-bottom:1px solid #CC0000;">
                      <tbody>
                        <?php
                        if(count($lastgames)>0):
                          foreach ($lastgames as $linha) :
                            $id1 = $linha['id1'];
                            $id2 = $linha['id2'];
                            $equipe1 = $linha['equipe1'];
                            $equipe2 = $linha['equipe2'];
                            $placar1 = $linha['placar1'];
                            $placar2 = $linha['placar2'];
                            $data = $linha['data_jogo'];
                            $dia = $linha['dia'];
                            $hora = $linha['hora'];
                            $categoria = $linha['categoria'];
                            $datahora = strtotime($data);
                            $dataformat = date("d/m/y",$datahora);

                          ?>

                        <tr>
                            <td>
                              <div class="logo-width-name"><img style="width:36px;height:36px;" src="<?= Yii::getAlias('@web') ?>/media-files/logo/<?php echo $equipe1 ?>.bmp" alt=""><p><?php echo $equipe1 ?> <?php echo $placar1 ?></p></div>
                            </td>
                            <td style=""><span>X</span></td>
                            <td>
                              <div class="logo-width-name"><img style="width:36px;height:36px;" src="<?= Yii::getAlias('@web') ?>/media-files/logo/<?php echo $equipe2 ?>.bmp" alt=""><p><?php echo $equipe2 ?> <?php echo $placar2 ?></p></div>
                            </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="font-size:10px;color:#CC0000;font-weight:bold;"><span><?php echo $dataformat." <br> ".$dia." - ".$hora." <br> ".$categoria ?></span></td>
                        </tr>
                        <?php
                      endforeach;
                        else:
                           ?>
                        <tr>
                            <td>
                              <p class="bg-info">Sem informações disponíveis no momento.</p>
                            </td>
                        </tr>
                      <?php endif; ?>
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
