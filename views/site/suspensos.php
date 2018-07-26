<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'TABELA SUSPENSOS - APCEF';
?>
<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture">
					    <h5>TABELA SUSPENSOS</h5>
					    <div class="styel-3 table-responsive">
					    	<table class="table text-justify table-hover">
  <!--DWLayoutTable-->
  <tr>
  <td class="col-md-2">
  <?= Html::img('@web/media-files/logo_32.jpg',
										['class'=>'img-responsive logo-campeonato','style'=>'margin:5px auto;']
										);
									?></td>
    <td colspan="4">
			<p><h2><?= $campeonato->nome ?></h2></p>
				<p><h3><?= $campeonato->trofeu ?></h3></p>
				<p><h3>Atletas Suspenso</h3></p>
				<p>Clique sobre o atleta e veja em quais os jogos tomou cartão!</p>
			</td>
	</tr>
	<tr>
		<th>Atleta</th>
		<th>Equipe</th>
		<th>Categoria</th>
		<th>Dt suspensão</th>
		<th>Jgs suspenso</th>
	</tr>
	<?php	foreach ((array)$suspensos as $s) : ?>
	<tr>
		<td><?php echo Html::a($s->nome_jogador, ['site/tabelagol','id'=>$s->id]) ?></td>
		<td><?php echo $s->time ?></td>
		<td><?php echo $s->categoria ?></td>
		<td><?php echo $s->data_cumprir ?></td>
		<td><?php echo $s->jogos_cumprir ?></td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan="2">Número de suspensos: <?php echo count($suspensos) ?></td>
		<td colspan="3">Dados atualizados pela Coordenação do campeonato</td>
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
