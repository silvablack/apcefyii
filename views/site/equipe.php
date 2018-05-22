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
            <div class="col-lg-8">
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 r-full-width">
              <h3><span><i class="red-color">JOGOS </i>DA EQUIPE</span></h3>
              <div class="upcoming-fixture next-tb">
                <div class="table-responsive">
                  <table class="table text-center table-condensed" style="border-right:1px solid #CC0000;border-left:1px solid #CC0000;border-bottom:1px solid #CC0000;">
                      <tbody>
                        <?php
                        if(count((array)$jogos)>0):
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

                        <tr>
                            <td>
                              <div class="logo-width-name"><img src="<?= Yii::getAlias('@web') ?>/media-files/logo/<?php echo $equipe1 ?>.bmp" alt=""><p><?php echo $equipe1 ?> <?php echo $placar1 ?></p></div>
                            </td>
                            <td style=""><span>X</span></td>
                            <td>
                              <div class="logo-width-name"><img src="<?= Yii::getAlias('@web') ?>/media-files/logo/<?php echo $equipe2 ?>.bmp" alt=""><p><?php echo $equipe2 ?> <?php echo $placar2 ?></p></div>
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
                      <tfoot>
                      <tr>
                      <td colspan="3"><b>Total jogos:</b> <?= count($jogos) ?></td>
                      </tr>
                      <tr>
                      <td colspan="3"><b>Coordenação:</b> Filon Monteiro</td>
                      </tr>
                      </tfoot>
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
