<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = ($type == 'PEN') ? 'Pauta de Julgamento':'Atestados Ok'.' - APCEF';
?>
  <!-- Match Result -->
  <div class="white-bg">
    <div class="container">
      <div class="row">
        <!-- Match Result Contenet -->
        <div class="col-lg-10 col-sm-10 col-md-10">

          <!-- Piont Table -->
          <div class="macth-fixture">
          <?= Html::img('@web/media-files/logo_32.jpg',
										['class'=>'img-responsive','style'=>'width:30%;margin:5px auto;']
										);
									?>
            <h5><?= ($type == 'PEN')?"Atletas com atestados Pendentes":"Atletas com atestados Ok" ?></h5>
            <div class="last-matches styel-3">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Equipe</th>
                          <th>Categoria</th>
                          <th>Atleta</th>
                          <th>Data Atestado</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($model as $k => $m): ?>
                        <tr>
                          <td><?= $k+1 ?></td>
                          <td><?= $m->time ?></td>
                          <td><?= $m->categoria ?></td>
                          <td><?= $m->nome_jogador ?></td>
                          <td><?= ($m->dtatestado == '0000-00-00') ? 'PENDENTE': Yii::$app->formatter->asDate($m->dtatestado,'dd/MM/Y') ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                          <td colspan="2">Total: <?= count($model) ?></td>
                          <td colspan="2">Dados atualizados pela Coordenação do campeonato</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
          </div>
          <!-- Piont Table -->

        </div>
        <!-- Match Result Contenet -->
      </div>
    </div>
  </div>
