<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'TABELA PENDURADOS - APCEF';
?>
<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture">
					    <h5>TABELA PENDURADOS</h5>
					    <div class="text-center">
					    	<table class="table table-hover text-justify">
									<tr>
									<td class="col-md-2">
									<?= Html::img('@web/media-files/logo_32.jpg',
										['class'=>'img-responsive','style'=>'margin:5px auto;']
										);
									?>
									</td>
								    <td colspan="3">
									
											<p><h2><?= $campeonato->nome ?></h2></p>
												<p><h3><?= $campeonato->trofeu ?></h3></p>
												<p><h3>Atletas Pendurados</h3></p>
											</td>
									</tr>
									<tr>
										<th>Equipe</th>
										<th>Categoria</th>
										<th>Atleta</th>
										<th>C.A.</th>
									</tr>

									<?php
									foreach ($pendurados as $p) :
									?>

									<tr>
										<td><?php echo $p->time ?></td>
										<td><?php echo $p->categoria ?></td>
										<td><?= Html::a($p->nome_jogador, ['site/tabelagol', 'id'=>$p->id]) ?></td>
										<td><?php echo $p->amarelo ?></td>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="2">Número de pendurados: <?php echo count($pendurados) ?></td>
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
