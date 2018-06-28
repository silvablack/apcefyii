<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = $categoria->categoria.' - Tabela Geral';
$this->registerJs("
$('#filter').change(function(){
	window.location.href = '../site/tabelageral?categoria=".$categoria->id."&rodada='+this.value;
	console.log(this.value);
});
", yii\web\View::POS_LOAD);
$this->registerCss("
h3{
	margin:0;
}
h5{

}
");
?>
<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture">
              <div class="pull-right">
                <?= Html::dropDownList('filter',null,ArrayHelper::merge(["all"=>"TODAS"],ArrayHelper::map($rodadas, 'rodada', 'rodada')), ['prompt'=>'Selecione a rodada', 'id'=>'filter']) ?>
              </div>
					    <h3 style="margin:0 0 30px"><?= $categoria->categoria ?> - TABELA GERAL</h3>
              <table class="table table-bordered table-hover text-center">
									<thead>
										<tr>
											<td colspan="2" style="width:33.33%;vertical-align: middle;">
												<h3>Giselle Menezes</h3>
												<p>Presidente</p>
											</td>
											<td colspan="2" style="width:33.33%;vertical-align: middle;">
											<?= Html::img('@web/media-files/logo_32.jpg',
												['class'=>'img-responsive','style'=>'width:50%;margin:5px auto;']
											);
											?>
											<h5><?= $jogos[0]->fase ?></h5>
											</td>
											<td colspan="2" style="width:33.33%;">
												<h3>Eusébio FIlho</h3>
												<p>Diretor de Esportes</p>
												<hr />
												<h3>Filon Monteiro/Francielo</h3>
												<p>Coordenação</p>
											</td>
										</tr>
										<tr>
											<td colspan="6"><h4><?= $rodada ?></h4></td>
										</tr>
										<tr>
											<th>JOGO</th>
											<th>DATA/DIA/HORA</th>
											<th>SÉRIE</th>
											<th>EQUIPE</th>
											<th>PLACAR</th>
											<th>EQUIPE</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach((array)$jogos as $j): ?>
										<tr>
											<td><?= Html::a($j->njg, ['site/sumula', 'jogo'=>$j->codigo]) ?></td>
											<td><?= Yii::$app->formatter->asDate($j->data_jogo, 'd/M/Y')." ".$j->dia." ".$j->hora ?></td>
											<td><?= $j->categoria ?></td>
											<td><?= Html::a($j->equipe1, ['site/sumula', 'jogo'=>$j->njg]) ?></td>
											<td>
												<?= Html::img(Yii::getAlias('@web').'/media-files/logo/'.$j->equipe1.'.bmp') ?>
												<?= $j->placar1 ?> x <?= $j->placar2 ?>
												<?= Html::img(Yii::getAlias('@web').'/media-files/logo/'.$j->equipe2.'.bmp') ?>
											</td>
											<td><?= Html::a($j->equipe2, ['site/sumula', 'jogo'=>$j->njg]) ?></td>
										</tr>
									<?php endforeach; ?>
									<tr class="bg-info">
										<td colspan="6">JOGOS NA RODADA: <?php echo count($jogos) ?></td>
									</tr>
									</tbody>
								</table>
              </div>
              <!-- Match Result Contenet -->
              </div>
              </div>
              </div>
