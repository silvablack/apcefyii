<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?= Html::csrfMetaTags() ?>
<meta name="author" content="Paulo Silva"/>
<!-- Document Title -->
<title><?= Html::encode($this->title) ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- StyleSheets -->
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <!--
    <div class="container">
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
         Alert::widget() ?>
         $content ?>
    </div>
  -->
  <!-- Wrapper -->
  <div class="wrap push">

  	<!-- Header -->
  	<header class="header style-3">

  		<!-- Top bar -->
  		<div class="topbar-and-logobar">
  			<div class="container">

  				<!-- Responsive Button -->
  				<div class="responsive-btn pull-right">
  					<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
  				</div>
  				<!-- Responsive Button -->

  				<!-- User Login Option -->
  				<ul class="user-login-option pull-right">
  					<li class="social-icon">
  						<div class="social-icons style-5">
  						</div>
  					</li>
  				</ul>
  				<!-- User Login Option -->

  			</div>
  		</div>
  		<!-- Top bar -->

  		<!-- Nav -->
  		<div class="nav-holder">
  			<div class="container">
  				<div class="maga-drop-wrap">

  					<!-- Logo -->
  					<div class="logo">
              <?= Html::a('<img src="'.Yii::getAlias("@web").'/images/logo-apcef.png" style="margin-left: 5px;margin-top:30px;" alt="">', ['site/index']) ?>
  					</div>
  					<!-- Logo -->

  					<!-- Nav List -->
  					<ul class="nav-list pull-right">
  						<li>
                <?= Html::a('Campeonato', ['site/index']); ?>
                <ul>
                  <li><?= Html::a('Atestado Pendentes', ['site/atestado', 'param'=>'PEN']); ?></li>
                  <li><?= Html::a('Atestado OK', ['site/atestado', 'param'=>'OK']); ?></li>
                  <li><?= Html::a('Tabela Geral',['site/pdf', 'file'=>'tbgeral'], ['target'=>'_blank']) ?></li>
                </ul>
  						</li>
  						<li class="mega-dropdown">
  								<a href="#">Notícias</a>
  								<ul>
  									<li class="row">
  										<div class="col-lg-3 col-md-3 col-sm-3">
  											<div class="blog-categories">
  											<h2>Categorias</h2>
  												<ul class="blog-categories-list">
                            <li><?= Html::a('Livre Prata', ['site/noticias','categoria'=>1]); ?></li>
  								    			<li><?= Html::a('Livre Ouro', ['site/noticias','categoria'=>2]); ?></li>
  								    			<li><?= Html::a('Quarentão', ['site/noticias','categoria'=>3]); ?></li>
  								    			<li><?= Html::a('Cinquentão', ['site/noticias','categoria'=>4]); ?></li>
  												</ul>
  											</div>
  										</div>
  										<div class="col-lg-9 col-md-9 col-sm-9">
  											<div id="mega-blog-slider" class="mega-blog-slider">
                          <?php foreach($this->params['noticias'] as $v): ?>
                          <!-- Post Img -->
  												<div class="item">
  													<!-- Post Img -->
  													<div class="large-post-img">
  														<a class="newsimagelink" href="<?= Yii::getAlias('@web') ?>/site/noticia?id=<?php echo $v['id']?>">
  															<img style="height:130px;" src="<?= Yii::getAlias('@web') ?>/images/gallery/<?php echo $v['src']; ?>" alt=""></a>
  													</div>
  													<!-- Post Img -->
  													<!-- Post Detail -->
  													<div class="large-post-detail style-3 p-0">
                            <span class="red-color">
															<?= Html::a(StringHelper::truncate($v['titulo'], 20), '@web/site/noticias?id='.$v['id'], ['class'=>'newslink']) ?>
														</span>
  														<p><?= StringHelper::truncate(strip_tags($v['noticia']),38) ?></p>
  													</div>
  													<!-- Post Detail -->
  												</div>
  												<!-- Post Img -->
                        <?php endforeach; ?>
  											</div>
  										</div>
  									</li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Histórico</a>
  								<ul>
  									<li><?= Html::a('Futsal 2012',['site/futsal','ano'=>2012]); ?></li>
  									<li><?= Html::a('Futsal 2013',['site/futsal','ano'=>2013]); ?></li>
  									<li><?= Html::a('Futsal 2014',['site/futsal','ano'=>2014]); ?></li>
  									<li><?= Html::a('Futsal 2015',['site/futsal','ano'=>2015]); ?></li>
  									<li><?= Html::a('Society 2012',['site/society','ano'=>2012]); ?></li>
  									<li><?= Html::a('Society 2013',['site/society','ano'=>2013]); ?></li>
  									<li><?= Html::a('Society 2014',['site/society','ano'=>2014]); ?></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Tabelas</a>
  								<ul>
                    <li><?= Html::a('Livre Prata',['site/tabelageral','categoria'=>1]) ?></li>
  									<li><?= Html::a('Livre Ouro',['site/tabelageral','categoria'=>2]) ?></li>
  									<li><?= Html::a('Quarentão',['site/tabelageral','categoria'=>3]) ?></li>
  									<li><?= Html::a('Cinquentão',['site/tabelageral','categoria'=>4]) ?></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Disciplina</a>
  								<ul>
                    <li><?= Html::a('Resultado Julgamento',['site/disciplina','param'=>'julgamento']) ?></li>
  									<li><?= Html::a('Atleta Pendurado',['site/disciplina','param'=>'pendurados']) ?></li>
  									<li><?= Html::a('Atleta Suspenso',['site/disciplina','param'=>'suspensos']) ?></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Scouts</a>
  								<ul>
                    <li><?= Html::a('Livre Prata',['site/classificacao','param'=>'livre-prata']) ?></li>
                    <li><?= Html::a('Livre Ouro',['site/classificacao','param'=>'livre-ouro']) ?></li>
  									<li><?= Html::a('Quarentão',['site/classificacao','param'=>'quarentao']) ?></li>
  									<li><?= Html::a('Cinquentão',['site/classificacao','param'=>'cinquentao']) ?></li>
  								</ul>
  						</li>
  						<li><a href="#">Regulamento</a>
  							<ul>
                  <li><?= Html::a('RGC',['site/pdf','file'=>'RGC'], ['target'=>'_blank']) ?></li>
  								<li><?= Html::a('Anexo-1 Futsal',['site/pdf','file'=>'ANEXO1'], ['target'=>'_blank']) ?></li>
  								<li><?= Html::a('Anexo-2 Society',['site/pdf','file'=>'ANEXO2'], ['target'=>'_blank']) ?></li>
  								<li><?= Html::a('CDE',['site/pdf','file'=>'CDE'], ['target'=>'_blank']) ?></li>
  							</ul>
  						</li>
  						<li><?= Html::a('Contato',['site/contato']) ?><li>
  					</ul>
  					<!-- Nav List -->

  				</div>
  			</div>
  		</div>
  		<!-- Nav -->

  	</header>
  	<!-- Header -->
  	<!-- Main Content -->
  	<main class="main-content">
  					<?php echo $content; ?>
  </main>
  <!-- Main Content -->
  <!-- Footer -->
  <footer class="main-footer styel-2">

  <!-- Footer Columns -->
  <div class="container">

  <!-- Subcribe Email
  <div class="subcribe-email">
  <input type="text" class="form-control" placeholder="Enter Email Address">
  <a class="fa fa-long-arrow-right" href="#"></a>
  </div>
  Subcribe Email -->

  <!-- Footer columns -->
  <div class="theme-padding-top footer-column">
  <div class="row">

  <!-- Footer Column -->
  <div class="col-lg-3 col-xs-6 r-full-width">
  <div class="column-widget h-white">
  <h5>Avalie-nos</h5>

  <!-- Form -->
  <form id="contact-form" class="contact-form col-sm-6" action="<?= Yii::getAlias('@web') ?>/site/enquete" method="get" onsubmit="return validaForm()" target="voto">
  <table style="color:white;">
  <tbody>
    <tr>
      <td><input name="opcao" value="1" type="radio"></td>
      <td>Ótimo</td>
    </tr>
    <tr>
      <td><input name="opcao" value="2" type="radio"></td>
      <td>Bom</td>
    </tr>
    <tr>
      <td><input name="opcao" value="3" type="radio"></td>
      <td>Regular</td>
    </tr>
  </tbody>
  </table>
  <input class="btn red-btn pull-right" value="Votar" type="submit">
  </form>
  <!-- Form -->

  </div>
  </div>
  <!-- Footer Column -->

  <!-- Footer Column -->
  <div class="col-lg-6 col-xs-12 r-full-width">
  <div class="column-widget h-white">
  <h5>INFORMAÇÃO</h5>
  <ul class="footer-links">
    <li><?= Html::a('Home', ['site/index']); ?></li>
    <li><?= Html::a('Contato',['site/contato']) ?></li>
      <li><?= Html::a('Futsal 2012',['site/futsal','ano'=>2012]); ?></li>
      <li><?= Html::a('Futsal 2013',['site/futsal','ano'=>2013]); ?></li>
      <li><?= Html::a('Futsal 2014',['site/futsal','ano'=>2014]); ?></li>
      <li><?= Html::a('Futsal 2015',['site/futsal','ano'=>2015]); ?></li>
      <li><?= Html::a('Society 2012',['site/society','ano'=>2012]); ?></li>
      <li><?= Html::a('Society 2013',['site/society','ano'=>2013]); ?></li>
      <li><?= Html::a('Society 2014',['site/society','ano'=>2014]); ?></li>
      <li><?= Html::a('Resultado Julgamento',['site/disciplina','param'=>'julgamento']) ?></li>
      <li><?= Html::a('Atleta Pendurado',['site/disciplina','param'=>'pendurados']) ?></li>
      <li><?= Html::a('Atleta Suspenso',['site/disciplina','param'=>'suspensos']) ?></li>
      <li><?= Html::a('RGC',['site/pdf','file'=>'RGC'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('Anexo-1 Futsal',['site/pdf','file'=>'ANEXO1'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('Anexo-2 Society',['site/pdf','file'=>'ANEXO2'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('CDE',['site/pdf','file'=>'CDE'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('Tabela Geral',['site/pdf', 'file'=>'tbgeral'], ['target'=>'_blank']) ?></li>
  </ul>
  </div>
  </div>
  <!-- Footer Column -->

  <!-- Footer Column -->
  <div class="col-lg-3 col-xs-6 r-full-width">
  <div class="column-widget h-white">
  <h5>Nosso contato</h5>
  <div class="address style-2 p-white">
  <ul class="address-list">
  <li><i class="fa fa-map-marker"></i>Rua José Luís Nova da Costa, s/n - Calhau, São Luís-MA</li>
  <li><i class="fa fa-phone"></i>98 3248-1576</li>
  <li><i class="fa fa-envelope"></i>filon_77@hotmail.com</li>
  </ul>
  </div>
  <div style="padding-bottom:10px;">
    <h5><?= Html::a('<span class="caret"></span> Administração',['painel/index'],['style'=>'color:#fff']); ?></h5>
  </div>
  </div>
  </div>
  <!-- Footer Column -->

  </div>
  </div>
  <!-- Footer columns -->

  </div>
  <!-- Footer Columns -->

  <!-- Copy Rights -->
  <div class="copy-rights style-2">
  <div class="container">
  <p>© Copyright by <i class="red-color">Gol de Placa MA</i> Todos os direitos reservados.</p>
  <a class="back-to-top scrollup" href="#">Voltar ao topo<i class="fa fa-arrow-circle-up"></i></a>
  </div>
  </div>
  <!-- Copy Rights -->

  </footer>
  <!-- Footer -->

  </div>
  <!-- Wrapper -->

  <!-- Slide Menu -->
  <nav id="menu" class="responive-nav">
  <a class="r-nav-logo" href="<?= Yii::getAlias('@web') ?>/site/index"><img src="<?= Yii::getAlias('@web') ?>/images/logo-apcef.png" style="margin-left: 5px;" alt=""></a>
  <ul class="respoinve-nav-list">
  <li>
  <a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Campeonato</a>
  <ul class="collapse" id="list-1">
    <li><?= Html::a('Atestado Pendentes', ['site/atestado', 'param'=>'PEN']); ?></li>
    <li><?= Html::a('Atestado OK', ['site/atestado', 'param'=>'OK']); ?></li>
    <li><?= Html::a('Tabela Geral',['site/pdf', 'file'=>'tbgeral'], ['target'=>'_blank']) ?></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Notícias</a>
  <ul class="collapse" id="list-2">
    <li><?= Html::a('Livre Prata', ['site/noticias','categoria'=>1]); ?></li>
    <li><?= Html::a('Livre Ouro', ['site/noticias','categoria'=>2]); ?></li>
    <li><?= Html::a('Quarentão', ['site/noticias','categoria'=>3]); ?></li>
    <li><?= Html::a('Cinquentão', ['site/noticias','categoria'=>4]); ?></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Histórico</a>
  <ul class="collapse" id="list-3">
    <li><?= Html::a('Futsal 2012',['site/futsal','ano'=>2012]); ?></li>
    <li><?= Html::a('Futsal 2013',['site/futsal','ano'=>2013]); ?></li>
    <li><?= Html::a('Futsal 2014',['site/futsal','ano'=>2014]); ?></li>
    <li><?= Html::a('Futsal 2015',['site/futsal','ano'=>2015]); ?></li>
    <li><?= Html::a('Society 2012',['site/society','ano'=>2012]); ?></li>
    <li><?= Html::a('Society 2013',['site/society','ano'=>2013]); ?></li>
    <li><?= Html::a('Society 2014',['site/society','ano'=>2014]); ?></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Tabelas</a>
  <ul class="collapse" id="list-4">
    <li><?= Html::a('Livre Prata',['site/tabelageral','categoria'=>1]) ?></li>
    <li><?= Html::a('Livre Ouro',['site/tabelageral','categoria'=>2]) ?></li>
    <li><?= Html::a('Quarentão',['site/tabelageral','categoria'=>3]) ?></li>
    <li><?= Html::a('Cinquentão',['site/tabelageral','categoria'=>4]) ?></li>>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>Disciplina</a>
  <ul class="collapse" id="list-5">
    <li><?= Html::a('Resultado Julgamento',['site/disciplina','param'=>'julgamento']) ?></li>
    <li><?= Html::a('Atleta Pendurado',['site/disciplina','param'=>'pendurados']) ?></li>
    <li><?= Html::a('Atleta Suspenso',['site/disciplina','param'=>'suspensos']) ?></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Scouts</a>
  <ul class="collapse" id="list-6">
    <li><?= Html::a('Livre Prata',['site/classificacao','param'=>'livre-prata']) ?></li>
    <li><?= Html::a('Livre Ouro',['site/classificacao','param'=>'livre-ouro']) ?></li>
    <li><?= Html::a('Quarentão',['site/classificacao','param'=>'quarentao']) ?></li>
    <li><?= Html::a('Cinquentão',['site/classificacao','param'=>'cinquentao']) ?></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Regulamento</a>
  <ul class="collapse" id="list-6">
    <li><?= Html::a('RGC',['site/pdf','file'=>'RGC'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('Anexo-1 Futsal',['site/pdf','file'=>'ANEXO1'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('Anexo-2 Society',['site/pdf','file'=>'ANEXO2'], ['target'=>'_blank']) ?></li>
    <li><?= Html::a('CDE',['site/pdf','file'=>'CDE'], ['target'=>'_blank']) ?></li>
  </ul>
  </li>
  <li><?= Html::a('Contato',['site/contato']) ?><li>
  </ul>
  </nav>
  <!-- Slide Menu -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
