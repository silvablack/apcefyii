<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'CAMPEONATO SOCIETY '.$ano;
?>
<!-- Match Result -->
		<div class="theme-padding white-bg">
			<div class="container">
				<div class="row">
					<!-- Match Result Contenet -->
					<div class="col-lg-12 col-sm-12">

					  <!-- Piont Table -->
					  <div class="macth-fixture table-responsive">
					    <h5>CAMPEONATO SOCIETY <?= $ano ?></h5>
					    <div>
              <?php if($ano == 2012): ?>
                <table class="table table-hover text-center">
  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/TOPO2012.gif"></td>
  </tr>
  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/SERIEOURO2012.gif"></td>
  </tr>
  <tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_CampeaOuro.gif">
			<p>
				Campanha:
        A equipe do Roma se classificou em 2&ordm; lugar na tabela geral de classificação,
        e em 18 jogos marcou 60 gols e tem a melhor defesa com 26 gols sofrido.
      	O time teve: 13 vitórias - 3 empates e 2 derrotas,
        seu artilheiro foi atleta: ARTUR LOBAO CARVALHO com 09 gols. A equipe
        pegou 28 cartões amarelo e um vermelho tornando-se o time mais
        disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%;"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/roma.jpg"></td>
  </tr>
	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_VCampeaOuro.gif">
			<p>
				Campanha:
				A equipe do América se classificou em 1&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 56 gols e tem a segunda
        melhor defesa com 27 gols sofrido(entre os finalistas).
      	O time teve: 14 vitórias - 1 empates e 3 derrotas,
        seu artilheiro foi atleta: DOMINGOS FERREIRA LOPES com 14 gols. A equipe
        pegou 28 cartões amarelo e dois vermelhos tornando-se o o segundo
        time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/america.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_3LUGARACampeaOuro.gif">
			<p>
				Campanha:
				A equipe do Estrela se classificou em 4&ordm; lugar na tabela geral de
        classificação, e em 18 jogos marcou 72 gols e tem a terceira
        melhor defesa com 40 gols sofrido(entre os finalistas).
      	O time teve: 11 vitórias - 3empates e 4derrotas,
        seu artilheiro foi atleta: <strong>JOÃO JOSE PESSOA MOTA</strong>
        com 30 gols(artilheiro do campeonato). A equipe pegou 37 cartões
        amarelo e um vermelho tornando-se o sexto time mais disciplinado do campeonato(entre
        os finalistas).
			</p>
		</td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/ESTRELA.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_FINALISTAPRATA.gif"></td>
  </tr>

	<tr>
		<td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_CampeaPRATA.gif">
			<p>
				Campanha:
				A equipe do Real Vasmen se classificou em 14&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 43 gols e tem a sexta
        melhor defesa com 57 gols sofrido(entre os finalistas).
      	O time teve: 5 vitórias - 3 empates e 10 derrotas,
        seu artilheiro foi atleta: DANILO DURANS RIBEIRO com 08 gols. A equipe
        pegou 22 cartões amarelo e cinco vermelhos tornando-se o setimo
        time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
		<td>&nbsp;</td>
	</tr>


	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_VCampeaPRATA.gif">
			<p>
				Campanha:
				A equipe do Equatorial se classificou em 12&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 52 gols e tem a oitava
        melhor defesa com 70 gols sofrido(entre os finalistas).</p>
    		O time teve: 5 vitórias - 4 empates e 9 derrotas,
        seu artilheiro foi atleta: ULISSES AZEVEDO BORDALO com 15 gols. A equipe
        pegou 21 cartões amarelo e quatro vermelhos tornando-se o quarto
        time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/EQUATORIAL.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/T_3LUGARACampeaPRATA.gif">
			<p>
				Campanha:
				A equipe do Fortaleza se classificou em 9&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 70 gols e tem a quarta
        melhor defesa com 46 gols sofrido(entre os finalistas).
      	O time teve: 10 vitórias - 4 empates e 4 derrotas,
        seu artilheiro foi atleta: JARBAS MARCONI E S. BARBOSA com 18 gols. A
        equipe pegou 37 cartões amarelo e seis vermelhos tornando-se o
        oitavo time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/FORTALEZA.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/DISCIPLINA.gif">
			<p>
				Campanha:
				A equipe do Roma se classificou em 2&ordm; lugar na tabela geral de classificação,
        e em 18 jogos marcou 60 gols e tem a melhor defesa com 26 gols sofrido.</p>
	      O time teve: 13 vitórias - 3 empates e 2 derrotas,
        seu artilheiro foi atleta: ARTUR LOBAO CARVALHO com 09 gols. A equipe
        pegou 28 cartões amarelo e um vermelho tornando-se o time mais
        disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/roma.jpg"></td>
  </tr>

  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/MELHOR_DEFESA.gif"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/ARTILHEIRO.gif"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/roma.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/JOTA.jpg"></td>
  </tr>

  <tr>
    <td colspan="2">IV CAMPEONATO SOCIETY 2012- CATEGORIA QUARENTÃO</td>
  </tr>
	<tr>
		<td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/CAMPEAOFLUMINESE.gif">
			<p>
				Campanha:
				A equipe do Fluminense se classificou em 1&ordm; lugar na tabela geral
        de classificação, e em 12 jogos marcou 63 gols e tem a melhor
        defesa com 24 gols sofrido.
      	O time teve: 10 vitórias - 1 empate e 1 derrota,
        seu artilheiro foi atleta: <strong>JORGE LUIS CUNHA CABRAL</strong> com
        28 gols(artilheiro do campeonato). A equipe pegou 11 cartões amarelo
        tornando-se o terceiro time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
		<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/FLUMINENESE.jpg"></td>
	</tr>

	<tr>
		<td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/CAMPEOAGUARA.gif">
			<p>
				Campanha:
				A equipe do Guará se classificou em 2&ordm; lugar na tabela geral
        de classificação, e em 12 jogos marcou 43 gols e tem a segunda
        melhor defesa com 27 gols sofrido.
      	O time teve: 7 vitórias - 3 empates e 2 derrotas,
        seu artilheiro foi atleta: ADELMAN DOS SANTOS C JUNIOR com 18 gols. A
        equipe pegou 10 cartões amarelo tornando-se o primeiro time mais
        disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
		<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/GUARA.jpg"></td>
	</tr>

	<tr>
		<td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/CAMPEAONACIONAL.gif">
			<p>
				Campanha:
				A equipe do Nacional se classificou em 4&ordm; lugar na tabela geral de
        classificação, e em 12 jogos marcou 39 gols e tem a terceira
        melhor defesa com 32 gols sofrido.</p>
      <p align="justify">O time teve: 7 vit&oacute;rias - 2 empates e 3 derrotas,
        seu artilheiro foi atleta: ANTONIO LUIS SILVA FERNANDES com 07 gols. A
        equipe pegou 12 cartões amarelo e três vermelhos tornando-se
        o quarto time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
		<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/NACIONAL.jpg"></td>
	</tr>

	<tr>
		<td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/DISCIPLINAQ.gif">
			<p>
				Campanha:
			</p>
		</td>
		<td>&nbsp;</td>
	</tr>



  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/MELHOR_DEFESAq.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/imagens_society2012/ARTILHEIRO_Q.jpg"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/FLUMINENESE.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_finais/JORGINHO.jpg"></td>
  </tr>
</table>
              <?php elseif($ano == 2013): ?>
                <table class="table table-hover">
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/logolivre.jpg" width="211" height="200"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/logoquar.jpg" width="211" height="200"></td>
  </tr>
  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/titulocampeao.jpg" width="628" height="31"></td>
  </tr>
	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/campeaosantacruz.jpg">
			<p>
				Campanha:
				A equipe do América classificou-se em 6&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 43 gols e sofreu
        24 ficando em segundo lugar com a melhor defesa..</font></p>
      	O time teve: 10 vitórias
        - 04 empates e 04 derrotas, seu artilheiro foi atleta: CLEITO FERREIRA
        SILVA, com 17 gols. A equipe pegou 23 cartões amarelo e 02 vermelho
        ficando em sexto lugar na disciplia do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/americalivre.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/vicecampeoaamerica.jpg">
			<p>
				Campanha:
				A equipe do Santa Cruz classificou-se em 1&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 54 gols e teve a
        melhor defesa do campeonato com 22 gols.</font></p>
	      O time teve: 12 vitórias
        - 03 empates e 03 derrotas, seu artilheiro foi atleta: LUCAS FIALHO CARDOSO,
        com 25 gols. A equipe pegou 23 cartões amarelo e um vermelho tornando-se
        o terceiro time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/santacruz.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/terceirolugarouro.jpg">
			<p>
				Campanha:
				A equipe do Primavera classificou-se em 4&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 69 gols e tem a terceira
        melhor defesa com 29 gols sofrido(entre os finalistas).
      	O time teve: 12 vitórias
        - 03 empates e 03 derrotas, seu artilheiro foi atleta: <strong>HUSDON
        JOSE SILVA PEREIRA,</strong> com 20 gols. A equipe pegou 21 cartões
        amarelo e nenhum vermelho tornando-se o segundo time mais disciplinado
        do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/primavera.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/titulocampeaoprata.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/campeaoksw.jpg">
			<p>
				Campanha:
				A equipe do KSW classificou-se em 09&ordm; lugar na tabela geral de classificação,
        e em 18 jogos marcou 48 gols e tem a quarta melhor defesa com 30 gols
        sofrido(entre os finalistas).O time teve: 09 vitórias
        - 04 empates e 05 derrotas, seu artilheiro foi atleta: IGOR BRENO MARQUES
        CUTRIM, com 10 gols. A equipe pegou 22 cartões amarelo e 03 vermelho
        tornando-se o setimo time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/ksw.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/vicecampeaoroma.jpg">
			<p>
				Campanha:
				A equipe do Roma classificou-se em 11&ordm; lugar na tabela geral de classificação,
        e em 18 jogos marcou 42 gols e tem a quinta melhor defesa com 31 gols
        sofrido(entre os finalistas).
      	O time teve: 08 vitórias
        - 03 empates e 07 derrotas, seu artilheiro foi atleta: THIAGO R. M. SALES
        LISBOA, com 09 gols. A equipe pegou 20 cartões amarelo e 02 vermelho
        tornando-se o quarto time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%">&nbsp;</td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/3lugaprata.jpg">
			<p>
				Campanha:
				A equipe do União classificou-se em 15&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 33 gols e ficou com
        a sétima melhor defesa com 72 gols sofrido(entre os finalistas).
      	O time teve: 02 vitórias - 03 empates e 13 derrotas,
        seu artilheiro foi atleta: LEONARDO DE OLIVEIRA DA SILVA, com 08 gols.
        A equipe pegou 14 cartões amarelo e 04 vermelhos tornando-se o
        quinto time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/uniao.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/disciplinadalivre.jpg">
			<p>
				Campanha:
				A equipe do Millan classificous-se em 12&ordm; lugar na tabela geral de
        classificação, e em 18 jogos marcou 34 gols e sofreu 79.
      	O time teve: 05 vitórias - 01 empates e 12 derrotas,
        seu artilheiro foi atleta: FLÁVIO ROBERTO COSTA SILVA e MARCELO
        MONTEIRO DOMINGOS, com 09 gols. A equipe pegou 09 cartões amarelo
        e 01 vermelho tornando-se o time mais disciplinado do campeonato(entre
        os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/millan.jpg"></td>
  </tr>


  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/melhordefesalivre.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/ARTILHEIRLUCAS.jpg"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/santacruz.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/LUCAS.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><strong>V CAMPEONATO SOCIETY 2013- CATEGORIA QUARENTÃO </strong></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/campeaoguara.jpg">
			<p>
				Campanha:
				A equipe do Roma 40 classificou-se em 4&ordm; lugar na tabela geral de
        classificação, e em 23 jogos marcou 115 gols e teve a terceira
        melhor defesa com 53 gols sofrido.
      	O time teve: 15 vitórias
        - 05 empate e 03 derrota, seu artilheiro foi atleta: <strong>PAULO CÉSA
        DE MELO DA SILVA, </strong> com 37 gols. A equipe pegou 16 cartões
        amarelo e 01 vermelho ficando em segundo como time mais disciplinado do
        campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/roma40.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/vicecampeaoroma40.jpg">
			<p>
				Campanha:
				A equipe do Guará classificou-se em 2&ordm; lugar na tabela geral
        de classificação, e em 23 jogos marcou 82 gols e tem a segunda
        melhor defesa com 43 gols sofrido. O time teve: 13 vitórias
        - 06 empates e 04 derrotas, seu artilheiro foi atleta: WALDEMIR CUTRIM
        NETO, com 40 gols. A equipe pegou 16 cartões amarelo tornando-se
        o time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/guaraquare.jpg"></td>
  </tr>

	<tr>
    <td>
			<img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/terceirolugafluminense.jpg">
			<p>
				Campanha:
				A equipe do Liverpool classificou-se em 3&ordm; lugar na tabela geral
        de classificação, e em 23 jogos marcou 100 gols e teve a
        quarta melhor defesa com 80 gols sofrido(entre os finalistas).O time teve: 14 vitórias
        - 02 empates e 07 derrotas, seu artilheiro foi atleta: FLAVIO MARCIO CARRAMILO
        DOS SANTOS, com 24 gols. A equipe pegou 14 cartões amarelo e 02
        vermelho tornando-se o terceiro time mais disciplinado do campeonato(entre
        os finalistas)
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/liveepool.jpg"></td>
  </tr>

  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/guaramasdisciplinada.jpg"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/melhordefesaguara.jpg"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/guaraquare.jpg"></p></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/guaraquare.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/ARTILHEIRO.jpg"></td>
  </tr>
  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/Campeoes_society_2013/wladimir_cutrim_neto%5B1%5D.jpg"></td>
  </tr>
</table>
              <?php elseif($ano == 2014): ?>
                <table class="table table-hover">
  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/logo.jpg"></td>
  </tr>
  <tr>
    <td colspan="2"><strong>CAMPEÕES DA CATEGORIA LIVRE: SÉRIE OURO</strong></td>
  </tr>
	<tr>
    <td>
			REAL VASMEN-CAMPEÃO
			<p>
				Campanha:
				A equipe do Real Vasmen classificou-se em 1&ordm; lugar na tabela geral
        de classificação, e em 16 jogos marcou 43 gols e sofreu
        24 ficando com o título do melhor defesa do campeonato. O time teve: 10 vitórias
        - 03 empates e 03 derrotas, seu artilheiro foi atleta: AUGUSTO CÉSAR
        R. ARAÁJO FILHO, com 11 gols. A equipe pegou 12 cartões
        amarelo e 02 vermelho ficando em segundo lugar na disciplia do campeonato(entre
        os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/realvasmen.jpg"></td>
  </tr>
	<tr>
    <td>
			<strong>FORTALEZA-VICE CAMPEÃO </strong>
			<p>
				Campanha:
				A equipe do Fortaleza classificou-se em 2&ordm; lugar na tabela geral
        de classificação, e em 16 jogos marcou 46 gols e sofreu
        40, ficando com a terceira colocação na equipe com a melhor
        defesa. O time teve: 09 vitórias
        - 03 empates e 04 derrotas, seu artilheiro foi atleta: ALEXANDRE SAMPAIO
        RIBEIRO, com 18 gols. A equipe pegou 20 cartões amarelo e 02 vermelho
        tornando-se o terceiro time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/fortaleza.jpg"></td>
  </tr>
	<tr>
    <td>
			<strong>INTERNACIONAL-TERCEIRO LUGAR</strong>
			<p>
				Campanha:
				A equipe do Internacional classificou-se em 4&ordm; lugar na tabela geral
        de classificação, e em 16 jogos marcou 43 gols e tem a quarta
        melhor defesa com 41 gols sofrido(entre os finalistas).
      	O time teve: 08 vitórias
        - 03 empates e 05 derrotas, seu artilheiro foi atleta: CLEITO FERREIRA
        SILVA com 21 gols. A equipe pegou 10 cartões
        amarelo e um vermelho, sendo a equipe mais diciplinada da competição.
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/fortaleza.jpg"></td>
  </tr>


  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/cleiton.jpg" >
			<strong>Cleiton Ferreira Silva</strong>, artilheiro da categoria livre SÉRIE ouro
        com 21 gols em 16 jogos, equipe do Internacional.
		</td>
  </tr>

  <tr>
    <td colspan="2"><strong>CAMPEÕES CATEGORIA LIVRE: SÉRIE PRATA</strong></td>
  </tr>

	<tr>
    <td>
			<strong>KSW-CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do KSW classificou-se em 02&ordm; lugar na tabela geral de classificação,
        e em 18 jogos marcou 57 gols e a melhor defesa do campeonato com 25 gols
        sofrido(entre os finalistas).
      O time teve: 13 vitórias
        - 03 empates e 02 derrotas, seu artilheiro foi atleta: IGOR BRENO MARQUES
        CUTRIM, com 25 gols. A equipe pegou 19 cartões amarelo e 01 vermelho
        tornando-se o terceiro time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/ksw.jpg"></td>
  </tr>

	<tr>
    <td>
			<strong>EXCADARIA-VICE-CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do Excadaria classificou-se em 04&ordm; lugar na tabela geral
				de classificação, e em 18 jogos marcou 64 gols e tem a quarta
				melhor defesa com 35 gols sofrido(entre os finalistas).
			O time teve: 10 vitórias
				- 03 empates e 05 derrotas, seu artilheiro foi atleta: PAULO HENRIQUE
				BOUCINHAS FILHO, com 17 gols. A equipe pegou 18 cartões amarelo
				e nenhum vermelho tornando-se o mais disciplinado do campeonato(entre
				os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/excadaria.jpg"></td>
  </tr>

	<tr>
    <td>
			<strong>TOK DE CAIXA-TERCEIRO LUGAR</strong>
			<p>
				Campanha:
				A equipe do Tok de Caixa classificou-se em 1&ordm; lugar na tabela geral
        de classificação, e em 18 jogos marcou 61 gols e sofreu
        30, ficando com a segunda melhor defesa com 30 gols sofrido(entre os finalistas).
        O time teve: 12 vitórias - 05 empates e 01 derrotas,
        seu artilheiro foi atleta: MARCONI BARROS M. JUNIOR, com 29 gols. A equipe
        pegou 24 cartões amarelo e 02 vermelhos tornando-se o
        quarto time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/tokdecaixa.jpg"></td>
  </tr>


  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/marconni.jpg"><strong>Marconni
        Barros Mondego Junio</strong>r, artilheiro da categoria livre SÉRIE
        prata com 29 gols em 16 jogos, equipe do Tok de Caixa.
		</td>
  </tr>

  <tr>
    <td colspan="2"><strong>CAMPEÕES DA CATEGORIA QUARENTãO-VI CAMPEONATO</strong></td>
  </tr>

	<tr>
    <td>
			<strong>GUARÁ-CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do Guará classificous-se em 1&ordm; lugar na tabela geral
        de classificação, e em 23 jogos marcou 205 gols e sofreu
        25, conquistando o título de melhor defesa do campeonato.
      	O time teve: 23 vitórias - 00 empates e 00 derrotas,
        seu artilheiro foi atleta: PAULO CéSA DE MELO DA SILVA, com 76
        gols. A equipe pegou 12 cartões amarelo e 01 vermelho tornando-se
        o time mais disciplinado do campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/guara.jpg"></td>
  </tr>

	<tr>
    <td>
			<strong>ROMA 40 -VICE-CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do Roma 40 classificou-se em 2&ordm; lugar na tabela geral de
        classificação, e em 23 jogos marcou 93 gols e teve a terceira
        melhor defesa com 57 gols sofrido.
      O time teve: 16 vitórias
        - 02 empate e 05 derrota, seu artilheiro foi atleta: HALIM JOSE TRABULSI<strong>
        , </strong> com 17 gols. A equipe pegou 13 cartões amarelo e 02
        vermelho ficando em terceiro como time mais disciplinado do campeonato(entre
        os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/roma.jpg"></td>
  </tr>

	<tr>
    <td>
			<strong>FLUMINENSE-TERCEIRO LUGAR</strong>
			<p>
				Campanha:
				A equipe do Fluminense classificou-se em 3&ordm; lugar na tabela geral
        de classificação, e em 23 jogos marcou 77 gols e tem a segunda
        melhor defesa com 56 gols sofrido.
      O time teve: 15 vitórias
        - 01 empates e 07 derrotas, seu artilheiro foi atleta: JOSE EUVALDO BARROS
        FONSECA, com 40 gols. A equipe pegou 18 cartões amarelo e 02 vermelhors
        ficando em quarto lugar na disciplina no campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/fluminense.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/paulocesar.jpg"> <strong>Paulo
        César de Melo da Silva</strong>, artilheiro da categoria quarentão
        com 76 gols em 23 jogos, equipe do Guará.
		</td>
  </tr>


  <tr>
    <td colspan="2"><strong><font color="#333333" size="4">CAMPEÕES
        DA CATEGORIA CINQUENTãO-I CAMPEONATO</font></strong></div></td>
  </tr>
	<tr>
    <td>
			<strong>ROMA-CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do Roma classificou-se em 2&ordm; lugar na tabela geral de classificação,
        e em 10 jogos marcou 44 gols e teve a segunda melhor defesa com 21 gols
        sofrido.
      O time teve: 07 vitórias
        - 00 empates e 03 derrotas, seu artilheiro foi atleta: MIGUEL SOARES MIRANDA,
        com 12 gols. A equipe pegou 05 cartões amarelo e 02 vermelhors
        ficando em terceiro lugar na disciplina no campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/romac14.jpg"></td>
  </tr>
	<tr>
    <td>
			<strong>GUARÁ-VICE CAMPEÃO</strong>
			<p>
				Campanha:
				A equipe do Guará classificou-se em 1&ordm; lugar na tabela geral
        de classificação, e em 10 jogos marcou 33 gols e teve a
        melhor defesa do campeonato com 15 gols sofrido.
      O time teve: 06 vitórias
        - 02 empates e 02 derrotas, seu artilheiro foi atleta: RAIMUNDO NONATO
        NERIS FERREIRA, com 09 gols. A equipe pegou 03 cartões amarelo
        e 01 vermelhors ficando em segundo lugar na disciplina no campeonato(entre
        os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/guarac14.jpg"></td>
  </tr>
	<tr>
    <td>
			<strong>FORTALEZA-TERCEIRO LUGAR</strong>
			<p>
				Campanha:
				A equipe do Fortaleza classificou-se em 4&ordm; lugar na tabela geral
        de classificação, e em 10 jogos marcou 37 gols teve a quarta
        melhor defesa com 37 gols sofrido.
      O time teve: 05 vitórias
        - 00 empates e 05 derrotas, seu artilheiro foi atleta: JOSé ANTENOR
        PEDRO DOS REIS, com 11 gols. A equipe pegou 01 cartões amarelo
        e 00 vermelho ganhando o título de equipe mais disciplinada no
        campeonato(entre os finalistas).
			</p>
		</td>
    <td style="width:30%"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/fortalezac14.jpg"></td>
  </tr>

  <tr>
    <td colspan="2"><img src="<?= Yii::getAlias('@web') ?>/media-files/society2013/miguel.jpg"><strong>Miguel
        Soares Miranda</strong>, artilheiro da categoria cinquentão com
        12 gols em 10 jogos, equipe do Roma.
		</td>
  </tr>
</table>
              <?php endif ?>
            </div>
          </div>
        <!-- Piont Table -->

        </div>
    <!-- Match Result Contenet -->
    </div>
  </div>
</div>
