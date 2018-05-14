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
                            $hora1 = substr($hora, 0, 2);
                            $hora2 = substr($hora, 2, 2);
                            $categoria = $linha['categoria'];
                            $datahora = strtotime($data);
                            $dataformat = date("d/m/y",$datahora);

                          ?>

                        <tr>
                            <td>
                              <div class="logo-width-name"><img src="paginas/logo/<?php echo $id1 ?>.jpg" alt=""><p><?php echo $equipe1 ?> <?php echo $placar1 ?></p></div>
                            </td>
                            <td style=""><span>X</span></td>
                            <td>
                              <div class="logo-width-name"><img src="paginas/logo/<?php echo $id2 ?>.jpg" alt=""><p><?php echo $equipe2 ?> <?php echo $placar2 ?></p></div>
                            </td>
                        </tr>
                        <tr>
                          <td colspan="3" style="font-size:10px;color:#CC0000;font-weight:bold;"><span><?php echo $dataformat." <br> ".$dia." - ".$hora1.":".$hora2." <br> ".$categoria ?></span></td>
                        </tr>
                        <?php
                      endforeach;
                        else:
                           ?>
                        <tr>
                            <td>
                              <p>Sem informações disponíveis no momento.</p>
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
