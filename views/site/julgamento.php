<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'PAUTA DE JULGAMENTO - APCEF';
?>

<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture">
					    <div class="text-center table-responsive">
						
					    	<table class="table table-hover">
								  <tr>
									<td class="col-md-2"><?= Html::img('@web/media-files/logo_32.jpg',
										['class'=>'img-responsive logo-campeonato','style'=>'margin:5px auto;']
										);
									?></td>
								    <td colspan="3" class="text-justify">
											<p><h2><?= $campeonato->nome ?></h2></p>
											<p><h3><?= $campeonato->trofeu ?></h3></p>
											<p><h3>Atletas a serem julgados</h3></p>
											<p><h4>Data do Julgamento: <?= Yii::$app->formatter->asDate($infoj->data, 'php:d \d\e M  \d\e Y à\s H:i:s') ?></h4></p>
										</td>
								  </tr>
								</table>
								<h5 class="text-center">PAUTA DE JULGAMENTO</h5>
								<table class="table table-hover">
									<tr>
										<th>Equipe</th>
										<th>Categoria</th>
										<th>Atleta</th>
										<th>Data do Jogo</th>
									</tr>
									<?php
										foreach ((array)$julgamento as $a):
									?>
									<tr>
										<td><?php echo $a->equipe ?></td>
										<td><?php echo $a->categoria ?></td>
										<td><?php echo $a->nome_jogador ?></td>
										<td><?php echo Yii::$app->formatter->asDate($a->data, 'd/M/Y') ?></td>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="2">Números de Processos: <?php echo count($julgamento) ?></td>
									<td colspan="4">Dados atualizados pela Coordenação do campeonato</td>
								</tr>
								</table>
							</div>
						</div>
					<!-- Piont Table -->

</div>
<!-- Match Result Contenet -->
</div>
<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture">
					    <h5 class="text-center">RESULTADO JULGAMENTO</h5>
					    <div class="text-center table-responsive">
								<table class="table table-hover">
									<tr>
										<th>Atleta</th>
										<th>Equipe</th>
										<th>Categoria</th>
										<th>Artigo</th>
										<th>Pena</th>
										<th>Data Julgamento</th>
									</tr>
									<?php
										foreach ((array)$rjulgamento as $a):
									?>
									<tr>
										<td><?php echo $a->nome_jogador ?></td>
										<td><?php echo $a->equipe ?></td>
										<td><?php echo $a->categoria ?></td>
										<td><?php echo $a->artigo?></td>
										<td><?php echo $a->pena ?></td>
										<td><?php echo Yii::$app->formatter->asDate($a->data_analise, 'd/M/Y') ?></td>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="2">Números de Processos: <?php echo count($rjulgamento) ?></td>
									<td colspan="4">Dados atualizados pela Coordenação do campeonato</td>
								</tr>
								</table>
							</div>
						</div>
					<!-- Piont Table -->

</div>
<!-- Match Result Contenet -->
</div>
</div>
</div>
