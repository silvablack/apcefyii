<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = $equipe->equipe.' - APCEF';
?>
<!-- Match Detail -->
<section class="theme-padding-bottom bg-fixed">
  <div class="container">

    <!-- Match Detail Content -->
    <div class="match-detail-content" style="padding-top:2vh;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 theme-padding-bottom">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 theme-padding-bottom">
               <?= Html::img('@web/media-files/fotos/'.$equipe->equipe.'.jpg',['class'=>'img-responsive','style'=>'width:400px;height:350px;display:block;margin:auto;']) ?>
            </div>
            <div class="col-lg-8 table-responsive">
              <h4><?= $equipe->equipe ?> - RELAÇÃO DE JOGADORES</h4>
              <table class="table table-striped table-hover table-condensed">
                <thead>
                <th scope="col">S.A.</th>
                <th scope="col">T. Sócio</th>
                <th scope="col">Jgd</th>
                <th scope="col">Jogador</th>
                <th scope="col">Gols</th>
                <th scope="col"><div style="width:24px;height:24px;background-color:yellow"></div></th>
                <th scope="col"><div style="width:24px;height:24px;background-color:red"></div></th>
                <th scope="col">Suspenso</th>
                </thead>
                <tbody>
                  <?php foreach($jogadores as $j): ?>
                  <tr>
                      <td><?= $j->situacao_atleta ?></td>
                      <td><?= $j->master ?></td>
                      <td><?= $j->jgd ?></td>
                      <td><?= $j->nome_jogador ?></td>
                      <td><?= $j->gols ?></td>
                      <td><?= $j->amarelo ?></td>
                      <td><?= $j->vermelho ?></td>
                      <td><?= $j->cartao ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="8">Total jogadores: <?= count((array)$jogadores); ?></td>
                  </tr>
                  <tr>
                    <td colspan="8" style="background-color: #46a546;color:#fff;">Técnico: <?php echo $equipe->tecnico ?></td>
                  </tr>
                  <tr>
                    <td colspan="8">Coordenação: Filon Monteiro</td>
                  </tr>
                </tfoot>
                </table>

              </div>

              <!-- Upcoming Fixture -->
            <div class="col-lg-4 col-sm-12 col-xs-12 r-full-width">
              <h3><span><i class="red-color">JOGOS DA </i>EQUIPE</span><a class="view-all pull-right" href="#"><i class="fa fa-angle-double-right"></i></a></h3>
              <div class="upcoming-fixture next-tb">
                <div class="table-responsive">
                        <?php
                        if(count($jogos)>0):
                          foreach ($jogos as $linha) :
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
                          <div class="next-match container-fluid">
                            <div class="row nt-match-body text-center" style="padding-top:2em;">
                              <div class="col-lg-5">
                                  <?= Html::img('@web/media-files/logo/'.$equipe1.'.bmp',['style'=>'width:36px;height:36px;']); ?>
                                  <p class="nt-match-title"><?php echo str_replace('_',' ',$equipe1) ?></p>
                              </div>
                              <div class="col-lg-2 placar">
                                <span><?php echo $placar1 ?>X<?php echo $placar2 ?></span>
                              </div>
                              <div class="col-lg-5 nt-match-title">
                                  <?= Html::img('@web/media-files/logo/'.$equipe2.'.bmp',['style'=>'width:36px;height:36px;']); ?>
                                  <p class="nt-match-title"><?php echo str_replace('_',' ',$equipe2) ?></p>
                              </div>
                            </div>
                            <div class="row nt-match-footer text-center" style="padding-bottom:1em;">
                              <div class="col-lg-12">
                                <span><?php echo $dataformat." <br> ".$dia." - ".$hora." <br> ".$categoria ?></span>
                              </div>
                            </div>
                          </div>

                        <?php
                      endforeach;
                        else:
                           ?>
                       <p class="bg-info">Sem informações disponíveis no momento.</p>
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
