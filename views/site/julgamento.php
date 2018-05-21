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
					    <h5>PAUTA DE JULGAMENTO</h5>
					    <div class="text-center">
					    	<table class="table table-hover">
								  <tr>
								    <td colspan="4" class="text-center">
											<p><h2>Campeonato de Futsal 2018</h2></p>
											<p><h3>Arivaldo Ribeiro Cantanhede</h3></p>
											<p><h3>Atletas a serem julgados</h3></p>
											<p><h4>Data do Julgamento: XX/XX/<?= date('Y') ?>, às 19:30h. </h4></p>
										</td>
								  </tr>
								</table>
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
									<td colspan="2">Dados atualizados pela Coordenação do campeonato</td>
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
