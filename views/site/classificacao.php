<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = $categoria.' - APCEF';
?>
<!-- Match Result -->
<div class="white-bg">
  <div class="container">
    <div class="row">
      <!-- Match Result Contenet -->
      <div class="col-lg-12 col-sm-12">
      <?= Html::img('@web/media-files/logo_32.jpg',
						['class'=>'img-responsive logo-campeonato','style'=>'width:15em;margin:5px auto;']
					);
			?>
        <h2>CLASSIFICAÇÃO <?= $categoria ?></h2>
        <p><h4>Scout de classificações</h4></p>
        <!-- Piont Table -->
        <div class="macth-fixture">
          <div class="row">
            <div class="col-lg-12 table-responsive">
              <h4><?= $categoria ?> <small>Clique sobre a equipe para mais detalhes</small></h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th>Esc.</th>
                  <th>Equipe</th>
                  <th>C</th>
                  <th>PT</th>
                  <th>V</th>
                  <th>E</th>
                  <th>D</th>
                  <th>GP</th>
                  <th>GC</th>
                  <th>SG</th>
                  <th>JG</th>
                  <th>%</th>
                  <th>Obs</th>
                </tr>
                <?php
                foreach ($classificacao as $c) :
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::a(Html::img('@web/media-files/logo/'.$c->equipe.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']), ['site/equipe','id'=>$c->id]) ?></td>
                  <td><?= Html::a($c->equipe, ['site/equipe','id'=>$c->id]) ?></td>
                  <td><?= $c->class ?></td>
                  <td><?= $c->PTS ?></td>
                  <td><?= $c->V ?></td>
                  <td><?= $c->E ?></td>
                  <td><?= $c->D ?></td>
                  <td><?= $c->GP ?></td>
                  <td><?= $c->GC ?></td>
                  <td><?= $c->SG ?></td>
                  <td><?= $c->part ?></td>
                  <td><?= $c->porcentagem ?></td>
                  <td><?= $c->legenda ?></td>
                </tr>

                <?php
              endforeach;
                ?>
              </table>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-6 table-responsive">
              <h4>Disciplina <small>A equipe que sofrer wxo estará eliminada do troféu disciplina!</small></h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Equipe</th>
                  <th>Class.</th>
                  <th>Pontos</th>
                  <th>Amarelo</th>
                  <th>Vermelho</th>
                </tr>
                <?php
                foreach ($classDisciplinar as $cd):
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$cd->equipe.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                  <td><?= Html::a($cd->equipe, ['site/equipe','id'=>$cd->id]) ?></td>
                  <td><?= $cd->classificacao_disciplinar ?></td>
                  <td><?= $cd->pontuacaoCartoes ?></td>
                  <td><?= $cd->qtdAmarelo ?></td>
                  <td><?= $cd->qtdVermelho ?></td>
                </tr>
              <?php endforeach ?>
            </table>
            </div>
            <div class="col-lg-6 table-responsive">
              <h4>Artilheiros série ouro <small>Clique sobre o atleta</small></h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Atleta</th>
                  <th>G</th>
                  <th>CA</th>
                  <th>CV</th>
                </tr>
                <?php
                 foreach ($artilheiros as $a):
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$a->time.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                  <td><?= Html::a($a->nome_jogador, ['site/gol','id'=>$a->id]) ?></td>
                  <td><?= $a->gols ?></td>
                  <td><?= $a->amarelo ?></td>
                  <td><?= $a->vermelho ?></td>
                </tr>
              <?php endforeach ?>
              </table>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-6 table-responsive">
              <h4>Atletas que marcaram gol contra</h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Atleta</th>
                  <th>Gols Contra</th>
                  <th>Número do Jogo</th>
                </tr>
                <?php
                foreach ($golsContra as $gc) :
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$gc->time.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                  <td><?= Html::a($gc->nome_jogador, ['site/gol','id'=>$gc->id]) ?></td>
                  <td><?php echo $gc->gol_contra ?></td>
                  <td><?php echo $gc->partidas ?></td>
                </tr>
              <?php endforeach ?>
              </table>
            </div>
            <div class="col-lg-6 table-responsive">
              <h4>Melhores ataque</h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Equipe</th>
                  <th>Gols Pró</th>
                  <th>Partidas</th>
                </tr>
                <?php
                foreach ($atakMaisPositivo as $amp) :
                 ?>
                 <tr>
                   <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$amp->equipe.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                   <td><?= Html::a($amp->equipe, ['site/equipe','id'=>$amp->id]) ?></td>
                   <td><?php echo $amp->GP ?></td>
                   <td><?php echo $amp->part ?></td>
                 </tr>
               <?php endforeach ?>
              </table>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-6 table-responsive">
              <h4>Melhores defesa</h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Equipe</th>
                  <th>Gols Contra</th>
                  <th>Partidas</th>
                </tr>
                <?php
                foreach ($melhorDefesa as $md):
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$md->equipe.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                  <td><?= Html::a($md->equipe, ['site/equipe','id'=>$md->id]) ?></td>
                  <td><?= $md->GC ?></td>
                  <td><?= $md->part ?></td>
                </tr>
              <?php endforeach ?>
              </table>
            </div>
            <div class="col-lg-6 table-responsive">
              <h4>Goleiros Artilheiros</h4>
              <table class="table table-striped table-hover table-condensed">
                <tr>
                  <th></th>
                  <th>Goleiro</th>
                  <th>Gols</th>
                  <th>Número do Jogo</th>
                </tr>
                <?php
                foreach ($goleirosArtilheiros as $ag) :
                ?>
                <tr>
                  <td style="text-align:center"><?= Html::img('@web/media-files/logo/'.$ag->time.'.bmp', ['style'=>'width:36px;height:36px;max-width:36px;']) ?></td>
                  <td><?= Html::a($ag->nome_jogador, ['site/gol','id'=>$ag->id]) ?></td>
                  <td><?php echo $ag->gols ?></td>
                  <td><?php echo $ag->partidas ?></td>
                </tr>
              <?php endforeach ?>
              </table>
            </div>
          </div>

</div>
</div>
<!-- Piont Table -->

</div>
<!-- Match Result Contenet -->
</div>
</div>
</div>
