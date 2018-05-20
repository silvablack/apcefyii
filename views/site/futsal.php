<?php
use yii\helpers\StringHelper;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->params['noticias'] = $noticias;
$this->title = 'CAMPEONATO DE FUTSAL '.$ano;
?>
<!-- Match Result -->
<div class="theme-padding white-bg">
  <div class="container">
    <div class="row">
      <!-- Match Result Contenet -->
      <div class="col-lg-12 col-sm-12">

        <!-- Piont Table -->
        <div class="macth-fixture">
          <h5>CAMPEONATO DE FUTSAL <?= $ano ?></h5>
          <div class="last-matches styel-3">

<?php if($ano == 2012): ?>
<table class="table table-hover">
    <tr>
      <td colspan="16">PARTICIPANTES DO CAMPEONATO
          <a href="noticia5.htm" target="centro">CLIQUE AQUI PARA VISUALIZAR O QUARENTÃO</a>
      </td>
    </tr>
    <tr>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/fortaleza.jpg" width="30" height="32"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/apcefenae.jpg" width="49" height="45"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/equatorial.jpg" width="25" height="33"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/estrela.jpg" width="50" height="34"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/internacional.jpg" width="30" height="29"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/ksw.jpg" width="30" height="36"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/millan.jpg" width="30" height="46"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/portuguesa.jpg" width="30" height="38"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/primavera.jpg" width="25" height="38"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/realvasmen.jpg" width="28" height="36"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/roma.jpg" width="30" height="38"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/santacruz.jpg" width="30" height="28"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/slz.jpg" width="30" height="45"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/tok_caixa.jpg" width="40" height="9"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/uniao.jpg" width="30" height="33"></div></td>
      <td><div align="center"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/logo/america.jpg" width="30" height="30"></div></td>
    </tr>
    <tr>
      <td><div align="center"><font size="1">Fortalezar</font></div></td>
      <td><div align="center"><font size="1">Apcefenae</font></div></td>
      <td><div align="center"><font size="1">Equatorial</font></div></td>
      <td><div align="center"><font size="1">Estrela</font></div></td>
      <td><div align="center"><font size="1">Internacional</font></div></td>
      <td><div align="center"><font size="1">Kws</font></div></td>
      <td><div align="center"><font size="1">Millan</font></div></td>
      <td><div align="center"><font size="1">Portuguesa</font></div></td>
      <td><div align="center"><font size="1">Primaver</font></div></td>
      <td><div align="center"><font size="1">R. Vasmen</font></div></td>
      <td><div align="center"><font size="1">Roma</font></div></td>
      <td><div align="center"><font size="1">Santa Cruz </font></div></td>
      <td><div align="center"><font size="1">São Luís</font></div></td>
      <td><div align="center"><font size="1">Tok de Caixa </font></div></td>
      <td><div align="center"><font size="1">União</font></div></td>
      <td><div align="center"><font size="1">America</font></div></td>
    </tr>
  </table></td>
</tr>
</table>
<table class="table table-hover">
<tr>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/equatorial.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/apcef.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/estrela.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/internacional.jpg" width="160" height="178"></td>
</tr>
<tr>
<td><strong>Equatorial</strong></td>
<td><strong>Apcefenae</strong></td>
<td><strong>Estrela</strong></td>
<td><strong>Internacional</strong></td>
</tr>
<tr>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/millan.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/portuguesa.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/primavera.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/ksw.jpg" width="160" height="178"></td>
</tr>
<tr>
<td><strong>Millan</strong></td>
<td><strong>Portuguesa</strong></td>
<td><strong>Primavera</strong></td>
<td><strong>Real Vasmen</strong></td>
</tr>
<tr>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/uniao.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/santacruz.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/saluis.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/tokcaixa.jpg" width="160" height="178"></td>
</tr>
<tr>
<td><strong>União</strong></td>
<td><strong>Santa Cruz</strong></td>
<td><strong>São Luís</strong></td>
<td><strong>Tok de Caixa</strong></td>
</tr>
<tr>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/AMERICA.jpg" width="159" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/fortaleza.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/roma.jpg" width="160" height="178"></td>
<td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos/ksw.jpg" width="160" height="178"></td>
</tr>
<tr>
<td><strong>Campeão</strong></td>
<td><strong>Vice-campeão</strong></td>
<td><strong>Terceiro lugar</strong></td>
<td><strong>Quarta lugar</strong></td>
</tr>
<tr>
<td><strong>América</strong></td>
<td><strong>Fortaleza</strong></td>
<td><strong>Ksw</strong></td>
<td><strong>Roma</strong></td>
</tr>

</table>

<table width="100%" border="0">
    <!--DWLayoutTable-->
    <tr bgcolor="#000033">
      <td><strong><em><font color="#FFFFFF">RESUMO DO CAMPEONATO</font></em></strong></td>
    </tr>
    <tr>
      <td><font size="2">Artilheiro: <font color="#000066">Domingos Ferreira
        Lopes do América e Igor Brendo Marques Cutrim do Ksw - 08 gols</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Melhor Defesa: <font color="#000066">Ksw 09 gols</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Melhor goleiro:<font color="#000066"> Pedro Henrique
        Silva Brito do América 10 gols</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Disciplina: <font color="#000099">America com 04
        cart&otilde;es amarelos ( 4 pts) </font></font></td>
    </tr>
    <tr>
      <td><font size="2">Quantidade de jogos: <font color="#000099">32 </font></font></td>
    </tr>
    <tr>
      <td><font size="2">Cartão amarelo:<font color="#000066"> 61</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Cartão vermelho:<font color="#000066"> 11</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Total de gols:<font color="#000066">193</font></font></td>
    </tr>
    <tr>
      <td><font size="2">Maior placar: <font color="#000099">Am&eacute;rica
        09x0 Equatorial</font></font></td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="19" colspan="3" valign="top"><font size="2"><strong>Presidenta:
        Giselle Meneses</strong></font></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><a href="Tbjogos.php">Sumulas dos jogos</a></td>
      <td></td>
    </tr>
    <tr>
      <td height="16" colspan="3" valign="top"><font size="2"><strong>Diretor de
        esportes: Eusebio Filho</strong></font></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
<?php elseif($ano == 2013): ?>
  <table class="table table-hover text-center">
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catserieourolivre.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/fortaleza.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/portuguesa.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/realvasmen.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_fortaleza.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_portuguesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_realvasmen.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 09</li>
				<li>Derrota: 01</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 04</li>
				<li>C.amarelo: 17</li>
				<li>Gol Pró: 60</li>
				<li>Gol contra: 31</li>
				<li>Artilheiro de time: Jarbas Marconi e Silva Barbosa (20 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 05</li>
				<li>Derrota: 04</li>
				<li>Empate: 04</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 11</li>
				<li>Gol Pró: 50</li>
				<li>Gol contra: 39</li>
				<li>Artilheiro de time: Fernando Antonio Silva Almeida (14 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 04</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 03</li>
				<li>C.amarelo: 13</li>
				<li>Gol Pró: 51</li>
				<li>Gol contra: 46</li>
				<li>Artilheiro de time: Augusto César R. de Araujo Filho (21 gols)</li>
			</ul>
    </td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catseriepratalivre.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/uniao.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/tokdecaixa.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/apcef.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_uniao.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_tokdecaixa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_apcef.jpg" width="200" height="25"></td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 05</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 10</li>
				<li>Gol Pró: 44</li>
				<li>Gol contra: 42</li>
				<li>Artilheiro de time: Kleber Kleper Ferro Leite Junior (11 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 06</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 03</li>
				<li>C.amarelo: 16</li>
				<li>Gol Pró: 42</li>
				<li>Gol contra: 55</li>
				<li>Artilheiro de time: José de Nazareno Silva Junior (13 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 04</li>
				<li>Derrota: 08</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 14</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 09</li>
				<li>Gol Pró: 33</li>
				<li>Gol contra: 54</li>
				<li>Artilheiro de time: José Firmino de Araujo Neto (07 gols)</li>
			</ul>
    </td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/disciplina_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/melhor_defesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/Artilheiro_futsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/uniao.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/america.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/carlosadriano.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_uniao.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_america.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_adriano.jpg" width="200" height="25"></td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 10</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 07</li>
				<li>Derrota: 02</li>
				<li>Empate: 04</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 05</li>
				<li>C.amarelo: 16</li>
				<li>Gol Pró: 44</li>
				<li>Gol contra: 25</li>
				<li>Artilheiro de time: Cleiton Ferreira Silva (11 gols)</li>
			</ul>
    </td>

		<td>
			<ul>
				<li>22 gosl em 12 jogos</li>
				<li>Atleta da equipe do Estrela</li>
			</ul>
		</td>

  </tr>
  <tr>
		<td colspan="3">
			<p>Estatística Geral</p>
			<ul>
				<li>Total de jogos: 98</li>
				<li>Total de Gols: 625</li>
				<li>Total de Cartões amarelo: 174</li>
				<li>Total de Cartões vermelhos: 35</li>
			</ul>
		</td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catquarentao.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/fluminense.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/guara.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/slzmaster.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_fluminense.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_guara.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_slz.jpg" width="200" height="25"></td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 11</li>
				<li>Derrota: 00</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 05</li>
				<li>Gol Pró: 66</li>
				<li>Gol contra: 20</li>
				<li>Artilheiro de time: Jorge Luis Cunha Cabral (25 gols)</li>
			</ul>
		</td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 03</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 06</li>
				<li>Gol Pró: 40</li>
				<li>Gol contra: 24</li>
				<li>Artilheiro de time: Adelman dos Santos Carneiro Junior (09 gols)</li>
			</ul>
		</td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 04</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 04</li>
				<li>Gol Pró: 33</li>
				<li>Gol contra: 38</li>
				<li>Artilheiro de time: Robert Magno Costa Froz (13 gols)</li>
			</ul>
		</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/disciplina_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/melhor_defesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/Artilheiro_futsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/slzmaster.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/fluminense.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/jorginho.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_slz.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_fluminense.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2013/nome_jorginh.jpg" width="200" height="25"></td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 04</li>
			</ul>
		</td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 11</li>
				<li>Derrota: 00</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 05</li>
				<li>Gol Pró: 66</li>
				<li>Gol contra: 20</li>
				<li>Artilheiro de time: Jorge Luis Cunha Cabral (25 gols)</li>
			</ul>
		</td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>25 gosl em 11 jogos</li>
				<li>Atleta da equipe do Fluminense</li>
			</ul>
		</td>
  </tr>
  <tr>
		<td colspan="3">
			<p>Estatística Geral</p>
			<ul>
				<li>Total de jogos: 53</li>
				<li>Total de Gols: 251</li>
				<li>Total de Cartões amarelo: 36</li>
				<li>Total de Cartões vermelhos: 10</li>
			</ul>
		</td>
  </tr>
</table>
<?php elseif($ano == 2014): ?>
  <table class="table table-hover text-center">
  <!--DWLayoutTable-->
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/logoapcef2014.jpg" width="159" height="92">
      <img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catserieourolivre.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/fortalezacampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/americacampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/realvasmencampeao14.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>FORTALEZA</td>
    <td>AMÉRICA</td>
    <td>REAL VASMEN</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 15</li>
				<li>Derrota: 02</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 18</li>
				<li>Gol Pró: 87</li>
				<li>Gol contra: 47</li>
				<li>Artilheiro de time: Jorge Luis Cunha Cabral (22 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 13</li>
				<li>Derrota: 06</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 05</li>
				<li>C.amarelo: 27</li>
				<li>Gol Pró: 70</li>
				<li>Gol contra: 56</li>
				<li>Artilheiro de time: Cleiton Ferreira Silva (18 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 17</li>
				<li>Derrota: 01</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 03</li>
				<li>C.amarelo: 15</li>
				<li>Gol Pró: 99</li>
				<li>Gol contra: 25</li>
				<li>Artilheiro de time: Danilo Ferreira Braga (20 gols)</li>
			</ul>
    </td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catseriepratalivre.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/internacionalcampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/kswcampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/cemarcampeao14.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>INTERNACIONAL</td>
    <td>KSW</td>
    <td>CEMAR</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 13</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 28</li>
				<li>Gol Pró: 55</li>
				<li>Gol contra: 77</li>
				<li>Artilheiro de time: Marcelo Nascimento Mendonça (11 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 09</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 07</li>
				<li>C.amarelo: 26</li>
				<li>Gol Pró: 42</li>
				<li>Gol contra: 59</li>
				<li>Artilheiro de time: Paulo Victor dos Santos Morais (14 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 09</li>
				<li>Empate: 03</li>
				<li>Total de jogos: 19</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 16</li>
				<li>Gol Pró: 49</li>
				<li>Gol contra: 61</li>
				<li>Artilheiro de time: Ulisses Azevedo Bordalo (16 gols)</li>
			</ul>
		</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/disciplina_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/melhor_defesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/Artilheiro_futsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/cemarcampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/realvasmencampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/arthur14.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>CEMAR</td>
    <td>REAL VASMEN</td>
    <td>ARTHUR P. DE ALBUQUERQUE</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 16</li>
			</ul>
		</td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Gol contra: 25</li>
			</ul>
		</td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>25 gols em 17 jogos</li>
				<li>Atleta da equipe da Portuguesa</li>
			</ul>
		</td>
  </tr>
  <tr>
		<td colspan="3">
			<p>Estatística geral</p>
			<ul>
				<li>Total de jogos: 152</li>
        <li>Total de Gols: 951</li>
        <li>Total de Cartões amarelo: 293</li>
        <li>Total de Cartões vermelhos: 37</li>
			</ul>
		</td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catquarentao.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/guaracampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/cruzeirocampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/fluminensecampeao14.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>GUARÁ</td>
    <td>CRUZEIRO</td>
    <td>FLUMINENSE</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 13</li>
				<li>Derrota: 00</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 07</li>
				<li>Gol Pró: 158</li>
				<li>Gol contra: 25</li>
				<li>Artilheiro de time: Paulo César de Melo da Silva (76 gols)</li>
			</ul>
		</td>

		<td>
			<p>Estatística: Falta</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 05</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 11</li>
				<li>Gol Pró: 49</li>
				<li>Gol contra: 61</li>
				<li>Artilheiro de time: Roberto Magno Costa Froz (33 gols)</li>
			</ul>
		</td>

		<td>
			<p>Estatística: Falta</p>
			<ul>
				<li>Vitoria: 11</li>
				<li>Derrota: 02</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 06</li>
				<li>Gol Pró: 102</li>
				<li>Gol contra: 33</li>
				<li>Jorge Luís Cunha Cabral (70 gols)</li>
			</ul>
		</td>

  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/disciplina_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/melhor_defesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/Artilheiro_futsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/cemarmcampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/guaracampeao14.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2014/pc14.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>CEMAR</td>
    <td>GUARÁ</td>
    <td>PAULO CÉSAR DE M. DA SILVA</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 06</li>
			</ul>
		</td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Gol contra: 25</li>
			</ul>
		</td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>76 gols em 13 jogos</li>
				<li>Atleta da equipe do Guará</li>
			</ul>
		</td>

  </tr>
  <tr>
		<td colspan="3">
			<p>Estatística geral</p>
			<ul>
				<li>Total de jogos: 63</li>
        <li>Total de Gols: 571</li>
        <li>Total de Cartões amarelo: 64</li>
        <li>Total de Cartões vermelhos: 06</li>
			</ul>
		</td>
  </tr>
</table>
<?php elseif($ano == 2015): ?>
  <table class="table table-hover text-center">
  <tr>
    <td colspan="3">
			<img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/logo.jpg" width="159" height="92">
			<img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catserieourolivre.jpg" width="608" height="25">
		</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/realvasmen.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/fortaleza.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/america.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>REAL VASMEN</td>
    <td>FORTALEZA</td>
    <td>AMÉRICA</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 10</li>
				<li>Derrota: 02</li>
				<li>Empate: 04</li>
				<li>Total de jogos: 16</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 20</li>
				<li>Gol Pró: 64</li>
				<li>Gol contra: 36</li>
				<li>Artilheiro de time: Augusto C. R. Araújo Filhol (17 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 07</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 16</li>
				<li>C.vermelho: 04</li>
				<li>C.amarelo: 26</li>
				<li>Gol Pró: 65</li>
				<li>Gol contra: 71</li>
				<li>Artilheiro de time: Alexandre Sampaio Ribeiro (21 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 11</li>
				<li>Derrota: 03</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 16</li>
				<li>C.vermelho: 04</li>
				<li>C.amarelo: 27</li>
				<li>Gol Pró: 76</li>
				<li>Gol contra: 42</li>
				<li>Artilheiro de time: Italo Antone Leitão Simão (27 gols)</li>
			</ul>
    </td>

  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catseriepratalivre.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/tok2.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/estrela.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/internacional.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>TOK DE CAIXA</td>
    <td>ESTRELA</td>
    <td>INTERNACIONAL</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 09</li>
				<li>Derrota: 01</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 23</li>
				<li>Gol Pró: 52</li>
				<li>Gol contra: 31</li>
				<li>Artilheiro de time: Renan Peter Costa (19 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 06</li>
				<li>Derrota: 05</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 02</li>
				<li>C.amarelo: 11</li>
				<li>Gol Pró: 53</li>
				<li>Gol contra: 54</li>
				<li>Artilheiro de time: Francivaldo da
	      Silva Moreira (13 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 11</li>
				<li>Derrota: 01</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 12</li>
				<li>C.vermelho: 03</li>
				<li>C.amarelo: 11</li>
				<li>Gol Pró: 78</li>
				<li>Gol contra: 33</li>
				<li>Artilheiro de time: Cleiton Ferreira Silva (30 gols)</li>
			</ul>
    </td>
  </tr>
  <tr>
    <td colspan="3"><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/catquarentao.jpg" width="608" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/camp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/vicecamp_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/terceiro_lugarfutsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guara.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/fluminense.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/liverpool.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>>GUARÁ</td>
    <td>FLUMINENSE</td>
    <td>LIVERPOOL</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 12</li>
				<li>Derrota: 01</li>
				<li>Empate: 00</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 07</li>
				<li>Gol Pró: 101</li>
				<li>Gol contra: 17</li>
				<li>Artilheiro de time: Paulo César/Jarbas Barbosa (27 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 09</li>
				<li>Derrota: 01</li>
				<li>Empate: 03</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 30</li>
				<li>Gol Pró: 92</li>
				<li>Gol contra: 30</li>
				<li>Artilheiro de time: Roberto Magno Costa Froz (41 gols)</li>
			</ul>
    </td>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 07</li>
				<li>Derrota: 04</li>
				<li>Empate: 02</li>
				<li>Total de jogos: 13</li>
				<li>C.vermelho: 01</li>
				<li>C.amarelo: 11</li>
				<li>Gol Pró: 42</li>
				<li>Gol contra: 47</li>
				<li>Artilheiro de time: Vitorino Vale Sobrinho (09 gols)</li>
			</ul>
    </td>
  </tr>
  <tr>
    <td colspan="3">CATEGORIA CINQUENTÃO</td>
  </tr>
  <tr>
    <td>CAMPEÃO</td>
    <td>VICE-CAMPEÃO</td>
    <td>TERCEIRO LUGAR</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guaracin.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/romacin.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/fortalezacin.jpg" width="200" height="163"></td>
  </tr>
  <tr>
    <td>GUARÁ</td>
    <td>ROMA</td>
    <td>FORTALEZA</td>
  </tr>
  <tr>
		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 09</li>
				<li>Derrota: 01</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 02</li>
				<li>Gol Pró: 33</li>
				<li>Gol contra: 10</li>
				<li>Artilheiro de time: Jóse Luis Pao Almeida (17 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 08</li>
				<li>Derrota: 02</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 03</li>
				<li>Gol Pró: 41</li>
				<li>Gol contra: 14</li>
				<li>Artilheiro de time: Miguel Soares de Miranda (09 gols)</li>
			</ul>
    </td>

		<td>
			<p>Estatística</p>
			<ul>
				<li>Vitoria: 04</li>
				<li>Derrota: 06</li>
				<li>Empate: 01</li>
				<li>Total de jogos: 11</li>
				<li>C.vermelho: 00</li>
				<li>C.amarelo: 03</li>
				<li>Gol Pró: 29</li>
				<li>Gol contra: 36</li>
				<li>Artilheiro de time: João Antenor Pedro dos Reis (14 gols)</li>
			</ul>
    </td>

  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/disciplina_futsal.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/melhor_defesa.jpg" width="200" height="25"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/noticias/Artilheiro_futsal.jpg" width="200" height="25"></td>
  </tr>
  <tr>
    <td>ESTRELA-SÉRIE PRATA</td>
    <td>TOK DE CAIXA-SÉRIE PRATA</td>
    <td>CLEITON SILVA (30) GOLS INTERNACIONAL-SÉRIE PRATA</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/estrela.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/tok2.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/cleiton.jpg" width="117" height="163"></td>
  </tr>
  <tr>
    <td>R. VASMEN-SÉRIE OURO</td>
    <td>R. VASMEN-SÉRIE OURO</td>
    <td>ITALO A. L. SIMÃO (27)GOLS AMÉRICA-SÉRIE OURO</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/realvasmen.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/realvasmen.jpg" width="200" height="163"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>GUARÁ-QUARENTÃO</font></div></td>
    <td>GUARÁ-QUARENTÃO</font></div></td>
    <td>ROBERTO MGANO C. FROZ (41)GOLS FLUMINENSE 40</td>
  </tr>
  <tr>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guara.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guara.jpg" width="200" height="163"></td>
    <td><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/magno.jpg" width="111" height="163"></td>
  </tr>
  <tr>
    <td>GUARÁ-CINQUENTÃO</td>
    <td>GUARÁ-CINQUENTÃO</td>
    <td>JOSÉ LUÍS P. ALMEIDA (17)GOLS GUARÁ 50</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guaracin.jpg" width="200" height="163"></td>
    <td colspan="6" valign="top"><img src="<?= Yii::getAlias('@web') ?>/media-files/fotos_futsal_2015/guaracin.jpg" width="200" height="163"></td>
    <td colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
		<td colspan="3">
			<p>Estatística Geral</p>
			<ul>
				<li>Total de jogos: 198</li>
				<li>Total de Gols: 1394</li>
				<li>Total de Cartões amarelo: 375</li>
				<li>Total de Cartões vermelhos: 46</li>
			</ul>
		</td>
  </tr>
</table>
<?php endif; ?>

</div>
</div>
<!-- Piont Table -->

</div>
<!-- Match Result Contenet -->
</div>
</div>
</div>
