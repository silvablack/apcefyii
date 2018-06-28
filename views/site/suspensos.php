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
					    <div class="styel-3">
					    	<table class="table text-center table-hover">
  <!--DWLayoutTable-->
  <tr>
    <td colspan="5">
	<?= Html::img('@web/media-files/logo_32.jpg',
										['class'=>'img-responsive','style'=>'position:absolute;left:2em;width:20%;margin:5px auto;']
										);
									?>
			<p><h1>VII Campeonato de Futsal 2018</h2></p>
				<p><h3>Troféu: Arivaldo Ribeiro Cantanhede</h3></p>
				<p><h3>Atletas Suspenso</h3></p>
				<p>Clique sobre o atleta e veja em quais os jogos tomou cartão!</p>
			</td>
	</tr>
	<tr>
		<th>Equipe</th>
		<th>Categoria</th>
		<th>Atleta</th>
		<th>Dt suspensão</th>
		<th>Jgs suspenso</th>
	</tr>
	<?php	foreach ((array)$suspensos as $s) : ?>
	<tr>
		<td><?php echo $s->time ?></td>
		<td><?php echo $s->categoria ?></td>
		<td><?php echo Html::a($s->nome_jogador, ['site/tabelagol','id'=>$s->id]) ?></td>
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
