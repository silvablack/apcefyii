<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
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
  						<a href="#"><img src="../images/logo-apcef.png" style="margin-left: 5px;margin-top:30px;" alt=""></a>
  					</div>
  					<!-- Logo -->

  					<!-- Nav List -->
  					<ul class="nav-list pull-right">
  						<li>
  								<a href="../index.php">Home</a>
  								<ul>
  									<li><a href="tb_atestadoPendente.php">Atestado Pendentes</a></li>
  									<li><a href="tb_atestadook.php">Atestado OK</a></li>
  									<li><a href="representantes.php">Representantes</a></li>
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
  													<li><a href="../noticia.php?categoria=1">Livre Prata</a></li>
  								    			<li><a href="../noticia.php?categoria=2">Livre Ouro</a></li>
  								    			<li><a href="../noticia.php?categoria=3">Quarentão</a></li>
  								    			<li><a href="../noticia.php?categoria=4">Cinquentão</a></li>
  												</ul>
  											</div>
  										</div>
  										<div class="col-lg-9 col-md-9 col-sm-9">
  											<div id="mega-blog-slider" class="mega-blog-slider">
                          <!-- NOTCIAS -->
  											</div>
  										</div>
  									</li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Campeonato</a>
  								<ul>
  									<li><a href="ficha.pdf">Formulário</a></li>
  									<li><a href="futsal_2012.php">Futsal 2012</a></li>
  									<li><a href="futsal_2013.php">Futsal 2013</a></li>
  									<li><a href="futsal_2014.php">Futsal 2014</a></li>
  									<li><a href="futsal_2015.php">Futsal 2015</a></li>
  									<li><a href="society_2011.php">Society 2011</a></li>
  									<li><a href="society_2012.php">Society 2012</a></li>
  									<li><a href="society_2013.php">Society 2013</a></li>
  									<li><a href="society_2014.php">Society 2014</a></li>
  									<li><a href="society_2015.php">Society 2015</a></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Tabelas</a>
  								<ul>
  									<li><a href="tabela_geral_livre_rodada1.php">Livre-série Ouro</a></li>
  									<li><a href="tabela_geral_livre_rodada1p.php">Livre-série Prata</a></li>
  									<li><a href="tabela_geral_livre_rodada1q.php">Quarentão</a></li>
  									<li><a href="tabela_geral_livre_rodada1c.php">Cinquentão</a></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Disciplina</a>
  								<ul>
  									<li><a href="tabela_julgamento.php">Resultado Julgamento</a></li>
  									<li><a href="tabela_pendurados.php">Atleta Pendurado</a></li>
  									<li><a href="tabela_suspensos.php">Atleta Suspenso</a></li>
  								</ul>
  						</li>
  						<li>
  								<a href="#">Scouts</a>
  								<ul>
  									<li><a href="classificacaoprincipal.php">Livre</a></li>
  									<li><a href="classificacaoquarentao.php">Quarentão</a></li>
  									<li><a href="classificacaocinquentao.php">Cinquentão</a></li>
  								</ul>
  						</li>
  						<li><a href="#">Regulamento</a>
  							<ul>
  								<li><a href="RGC.pdf">RGC</a></li>
  								<li><a href="disputafutsal.pdf">Anexo-1 Futsal</a></li>
  								<li><a href="disputasociety2016.pdf">Anexo-2 Society</a></li>
  								<li><a href="cde.pdf">CDE</a></li>
  								<li><a href="tbgeral.pdf">Tabela Geral</a></li>
  							</ul>
  						</li>
  						<li><a href="contato.php">Contato</a><li>
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
  <form id="contact-form" class="contact-form col-sm-6" action="enquete.php" method="get" onsubmit="return validaForm()" target="voto">
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
  <li><a href="../index.php">Home</a></li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="tbgeral.pdf">Tabela Geral</a></li>
  <li><a href="ficha.pdf">Formulário</a></li>
  <li><a href="futsal_2012.php">Futsal 2012</a></li>
  <li><a href="futsal_2013.php">Futsal 2013</a></li>
  <li><a href="futsal_2014.php">Futsal 2014</a></li>
  <li><a href="futsal_2015.php">Futsal 2015</a></li>
  <li><a href="society_2011.php">Society 2011</a></li>
  <li><a href="society_2012.php">Society 2012</a></li>
  <li><a href="society_2013.php">Society 2013</a></li>
  <li><a href="society_2014.php">Society 2014</a></li>
  <li><a href="society_2015.php">Society 2015</a></li>
  <li><a href="tabela_julgamento.php">Resultado Julgamento</a></li>
  <li><a href="tabela_pendurados.php">Atleta Pendurado</a></li>
  <li><a href="tabela_suspensos.php">Atleta Suspenso</a></li>
  <li><a href="RGC.pdf">RGC</a></li>
  <li><a href="disputafutsal.pdf">Anexo-1 Futsal</a></li>
  <li><a href="disputasociety2016.pdf">Anexo-2 Society</a></li>
  <li><a href="cde.pdf">CDE</a></li>
  <li><a href="tbgeral.pdf">Tabela Geral</a></li>
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
    <h5><a href="painel/index.php" style="color:#FFF"><span class="caret"></span> Administração</a></h5>
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
  <a class="r-nav-logo" href="../index.php"><img src="../images/logo-apcef.png" style="margin-left: 5px;" alt=""></a>
  <ul class="respoinve-nav-list">
  <li>
  <a data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
  <ul class="collapse" id="list-1">
  <li><a href="tb_atestadoPendente.php">Atestado Pendentes</a></li>
  <li><a href="tb_atestadook.php">Atestado OK</a></li>
  <li><a href="representantes.php">Representantes</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Notícias</a>
  <ul class="collapse" id="list-2">
  <li><a href="../noticia.php?categoria=1">Livre Prata</a></li>
  <li><a href="../noticia.php?categoria=2">Livre Ouro</a></li>
  <li><a href="../noticia.php?categoria=3">Quarentão</a></li>
  <li><a href="../noticia.php?categoria=4">Cinquentão</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Campeonato</a>
  <ul class="collapse" id="list-3">
  <li><a href="ficha.pdf">Formulário</a></li>
  <li><a href="futsal_2012.php">Futsal 2012</a></li>
  <li><a href="futsal_2013.php">Futsal 2013</a></li>
  <li><a href="futsal_2014.php">Futsal 2014</a></li>
  <li><a href="futsal_2015.php">Futsal 2015</a></li>
  <li><a href="society_2011.php">Society 2011</a></li>
  <li><a href="society_2012.php">Society 2012</a></li>
  <li><a href="society_2013.php">Society 2013</a></li>
  <li><a href="society_2014.php">Society 2014</a></li>
  <li><a href="society_2015.php">Society 2015</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Tabelas</a>
  <ul class="collapse" id="list-4">
  <li><a href="tabela_geral_livre_rodada1.php">Livre-série Ouro</a></li>
  <li><a href="tabela_geral_livre_rodada1p.php">Livre-série Prata</a></li>
  <li><a href="tabela_geral_livre_rodada1q.php">Quarentão</a></li>
  <li><a href="tabela_geral_livre_rodada1c.php">Cinquentão</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>Disciplina</a>
  <ul class="collapse" id="list-5">
  <li><a href="tabela_julgamento.php">Resultado Julgamento</a></li>
  <li><a href="tabela_pendurados.php">Atleta Pendurado</a></li>
  <li><a href="tabela_suspensos.php">Atleta Suspenso</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Scouts</a>
  <ul class="collapse" id="list-6">
  <li><a href="classificacaoprincipal.php">Livre</a></li>
  <li><a href="classificacaoquarentao.php">Quarentão</a></li>
  <li><a href="classificacaocinquentao.php">Cinquentão</a></li>
  </ul>
  </li>
  <li>
  <a data-toggle="collapse" href="#list-6"><i class="pull-right fa fa-angle-down"></i>Regulamento</a>
  <ul class="collapse" id="list-6">
  <li><a href="RGC.pdf">RGC</a></li>
  <li><a href="disputafutsal.pdf">Anexo-1 Futsal</a></li>
  <li><a href="disputasociety2016.pdf">Anexo-2 Society</a></li>
  <li><a href="cde.pdf">CDE</a></li>
  <li><a href="tbgeral.pdf">Tabela Geral</a></li>
  </ul>
  </li>
  <li><a href="contato.php">Contato</a><li>
  </ul>
  </nav>
  <!-- Slide Menu -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
