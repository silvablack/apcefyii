<?php
include "../conexao.inc";

$sq = "select * from classifica where categoria='livre' order by  class asc";
$rs = mysql_query($sq) or die (mysql_error());

$sq_qt = "SELECT * FROM classifica2 WHERE quarta='Q' and categoria='livre' and serie='ouro' ORDER BY  class asc";
$rs_qt = mysql_query($sq_qt) or die (mysql_error());

$sq_qtp = "SELECT * FROM classifica2 WHERE quarta='Q' and categoria='livre' and serie='prata' ORDER BY  class asc";
$rs_qtp = mysql_query($sq_qtp) or die (mysql_error());

$sq_sf = "SELECT * FROM classifica3 WHERE semi='S' and categoria='livre' and serie='ouro' ORDER BY  class asc";
$rs_sf = mysql_query($sq_sf) or die (mysql_error());

$sq_sfp = "SELECT * FROM classifica3 WHERE semi='S' and categoria='livre' and serie='prata' ORDER BY  class asc";
$rs_sfp = mysql_query($sq_sfp) or die (mysql_error());

$sql_art = "SELECT * FROM jogadores WHERE categoria='livre' ORDER BY  gol desc,atleta asc limit 5";
$rs_art = mysql_query($sql_art) or die (mysql_error());

$sq2 = "SELECT * FROM classifica WHERE categoria='livre' ORDER BY  classdisc asc";
$rs2 = mysql_query($sq2) or die (mysql_error());

$sq3 = "SELECT * FROM classifica WHERE categoria='livre' ORDER BY  gp desc";
$rs3 = mysql_query($sq3) or die (mysql_error());

$sq4 = "SELECT * FROM classifica WHERE categoria='livre' ORDER BY  gc asc";
$rs4 = mysql_query($sq4) or die (mysql_error());

?>

<html>
<head>
<title>Livre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
font-face:arial,verdana;size:8px;color:#000000;
scrollbar-arrow-color:#ffffff;
scrollbar-track-color:#00ccff;
scrollbar-face-color:#000000;
}
</style>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="650" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="187" height="20" valign="top"><font size="2"><em><a href="../sumulas.htm" target="centro"><strong>S&Uacute;MULAS 
      DOS JOGOS</strong></a></em></font></td>
    <td width="387" valign="top"><strong><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Clique sobre seu time 
      e confira os seus jogos.</font></strong></td>
    <td width="76">&nbsp;</td>
  </tr>
  <tr> 
    <td height="980" colspan="3" align="left" valign="top"> 
      <?php
	
	echo "<table border=0 width=1000>
	<tr bgcolor=#FFCC00>
	<th colspan=12 valign=middle height=40>
	<font color=#000033 face=arial,verdana><h2><font face=arial,verdana size=1><b>Dados atualizados dia 02.07.13 - 13:00</h2></font>
	</tr>
	<font color=#000033 face=arial,verdana><h2>XVIII CAMPEONATO DE FUTEBOL SOCIETY-2013</h2></font>
	</tr>
	<font color=#000033 face=arial,verdana><h2>CHARLES ROBERT</h2></font>
	</tr>
	<table border=0 width=500>
	<tr bgcolor=#FFFFCC>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>Escudo</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>Class.</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>Equipe</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>Jogos</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>PT</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>V</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>E</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>D</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>GP</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>GC</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>SG</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#000033><b>Legenda</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs)) {
						$id = $linha['id'];
						$equipe = $linha['equipe'];
						$pontos = $linha['pts'];
						$vitorias = $linha['v'];
						$derrotas = $linha['d'];
						$empates = $linha['e'];
						$saldo_gols = $linha['sg'];
						$class = $linha['class'];
						$gp = $linha['gp'];
						$gc = $linha['gc'];
						$partida = $linha['part'];
						$wo = $linha['legendawo'];
								
						
						echo "
							  <tr bgcolor=#ccffcc>
							  <td bgcolor=#ffffff align=center valign=middle width=5%><a href=tabela_equipe.php?equipe=".$id."><img src='logoc/".$linha["id"].".jpg' title='Clique para exibir as informações da equipe!' width=30 height=30 border=0></a></td>
							  <td align=center bgcolor=#ffff99 width=4%><font face=arial,verdana size=1><b>".$class."</b></font></td>
							  <td align=left><font face=arial,verdana size=1<b><a href=tabela_equipe.php?equipe=".$id.">".$equipe."</a></b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$partida."</b></font></td>
							  <td align=center width=4% bgcolor=#ffff99><font face=arial,verdana size=1><b>".$pontos."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$vitorias."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$empates."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$derrotas."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gp."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gc."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$saldo_gols."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$wo."</b></font></td>
							  </tr>
							  ";						
						}
	
				echo "</table>";
	echo "<table border=0 width=650>
	<tr bgcolor=#FF6600>
	<th colspan=12 valign=middle height=40>
	<font color=#FFFFFF face=arial,verdana><h2>QUARTAS DE FINAIS-OURO</h2></font>
	</th>
	</tr>
	<tr bgcolor=#009900>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Class.</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Jogos</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>PT</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>V</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>E</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>D</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GP</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GC</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>SG</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Legenda</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs_qt)) {
						$id = $linha['id'];
						$equipe = $linha['equipe'];
						$pontos = $linha['pts'];
						$vitorias = $linha['v'];
						$derrotas = $linha['d'];
						$empates = $linha['e'];
						$saldo_gols = $linha['sg'];
						$class = $linha['class'];
						$gp = $linha['gp'];
						$gc = $linha['gc'];
						$partida = $linha['part'];
						$wo = $linha['legendawo'];						
						
						echo "
							  <tr bgcolor=#FFFFFF>
							  <td bgcolor=#ffffff align=center valign=middle width=5%><a href=tabela_equipe.php?equipe=".$id."><img src='logocq/".$linha["id"].".jpg' title='Clique par?????????echa exibir as informações da equipe!' width=30 height=30 border=0></a></td>
							  <td align=center bgcolor=#ffff99 width=4%><font face=arial,verdana size=1><b>".$class."</b></font></td>
							 <td align=left><font face=arial,verdana size=1><b><a href=tabela_equipe.php?equipe=".$id.">".$equipe."</a></b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$partida."</b></font></td>
							  <td align=center width=4% bgcolor=#ffff99><font face=arial,verdana size=1><b>".$pontos."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$vitorias."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$empates."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$derrotas."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gp."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gc."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$saldo_gols."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$wo."</b></font></td>
							  </tr>
							  ";						
						}
						echo "<table border=0 width=650>
	<tr bgcolor=#CCCCCC>
	<th colspan=12 valign=middle height=40>
	<font color=#000066 face=arial,verdana><h2>QUARTAS DE FINAIS-PRATA</h2></font>
	</th>
	</tr>
	<tr bgcolor=#0099CC>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Class.</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Jogos</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>PT</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>V</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>E</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>D</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GP</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GC</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>SG</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Legenda</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs_qtp)) {
						$id = $linha['id'];
						$equipe = $linha['equipe'];
						$pontos = $linha['pts'];
						$vitorias = $linha['v'];
						$derrotas = $linha['d'];
						$empates = $linha['e'];
						$saldo_gols = $linha['sg'];
						$class = $linha['class'];
						$gp = $linha['gp'];
						$gc = $linha['gc'];
						$partida = $linha['part'];
						$wo = $linha['legendawo'];						
						
						echo "
							  <tr bgcolor=#FFFFFF>
							  <td bgcolor=#ffffff align=center valign=middle width=5%><a href=tabela_equipe.php?equipe=".$id."><img src='logocq/".$linha["id"].".jpg' title='Clique par?????????echa exibir as informações da equipe!' width=30 height=30 border=0></a></td>
							  <td align=center bgcolor=#ffff99 width=4%><font face=arial,verdana size=1><b>".$class."</b></font></td>
							 <td align=left><font face=arial,verdana size=1><b><a href=tabela_equipe.php?equipe=".$id.">".$equipe."</a></b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$partida."</b></font></td>
							  <td align=center width=4% bgcolor=#ffff99><font face=arial,verdana size=1><b>".$pontos."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$vitorias."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$empates."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$derrotas."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gp."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gc."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$saldo_gols."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$wo."</b></font></td>
							  </tr>
							  ";						
						}
						
				echo "</table>";
				echo "<table border=0 width=650>
	<tr bgcolor=#ff9900>
	<th colspan=12 valign=middle height=40>
	<font color=#FFFFFF face=arial,verdana><h2>SEMIFINAIS-OURO</h2></font>
	</th>
	</tr>
	<tr bgcolor=#ff0000>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Class.</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Jogos</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>PT</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>V</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>E</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>D</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GP</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GC</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>SG</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Legenda</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs_sf)) {
						$id = $linha['id'];
						$equipe = $linha['equipe'];
						$pontos = $linha['pts'];
						$vitorias = $linha['v'];
						$derrotas = $linha['d'];
						$empates = $linha['e'];
						$saldo_gols = $linha['sg'];
						$class = $linha['class'];
						$gp = $linha['gp'];
						$gc = $linha['gc'];
						$partida = $linha['part'];
						$wo = $linha['legendawo'];						
						
						echo "
							  <tr bgcolor=#ccff66>
							  <td bgcolor=#ffffff align=center valign=middle width=5%><a href=tabela_equipe.php?equipe=".$id."><img src='logocs/".$linha["id"].".jpg' title='Clique par?????????echa exibir as informações da equipe!' width=30 height=30 border=0></a></td>
							  <td align=center bgcolor=#ffff99 width=4%><font face=arial,verdana size=1><b>".$class."</b></font></td>
							 <td align=left><font face=arial,verdana size=1><b><a href=tabela_equipe.php?equipe=".$id.">".$equipe."</a></b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$partida."</b></font></td>
							  <td align=center width=4% bgcolor=#ffff99><font face=arial,verdana size=1><b>".$pontos."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$vitorias."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$empates."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$derrotas."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gp."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gc."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$saldo_gols."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$wo."</b></font></td>
							  </tr>
							  ";						
						}
						
				echo "<table border=0 width=650>
	<tr bgcolor=#999999>
	<th colspan=12 valign=middle height=40>
	<font color=#FFFFFF face=arial,verdana><h2>SEMIFINAIS-PRATA</h2></font>
	</th>
	</tr>
	<tr bgcolor=#ff0000>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Class.</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Jogos</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>PT</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>V</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>E</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>D</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GP</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GC</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>SG</b></font></td>
	<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Legenda</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs_sfp)) {
						$id = $linha['id'];
						$equipe = $linha['equipe'];
						$pontos = $linha['pts'];
						$vitorias = $linha['v'];
						$derrotas = $linha['d'];
						$empates = $linha['e'];
						$saldo_gols = $linha['sg'];
						$class = $linha['class'];
						$gp = $linha['gp'];
						$gc = $linha['gc'];
						$partida = $linha['part'];
						$wo = $linha['legendawo'];						
						
						echo "
							  <tr bgcolor=#ccff66>
							  <td bgcolor=#ffffff align=center valign=middle width=5%><a href=tabela_equipe.php?equipe=".$id."><img src='logocs/".$linha["id"].".jpg' title='Clique par?????????echa exibir as informações da equipe!' width=30 height=30 border=0></a></td>
							  <td align=center bgcolor=#ffff99 width=4%><font face=arial,verdana size=1><b>".$class."</b></font></td>
							 <td align=left><font face=arial,verdana size=1><b><a href=tabela_equipe.php?equipe=".$id.">".$equipe."</a></b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$partida."</b></font></td>
							  <td align=center width=4% bgcolor=#ffff99><font face=arial,verdana size=1><b>".$pontos."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$vitorias."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$empates."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$derrotas."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gp."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$gc."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$saldo_gols."</b></font></td>
							  <td align=center width=4%><font face=arial,verdana size=1><b>".$wo."</b></font></td>
							  </tr>
							  ";						
						}
				echo "</table>";
			
				
				echo "<table border=0 width=650>
					  <tr bgcolor=#009900>
					  <th colspan=12 valign=middle height=25>
					  <font color=#FFFFFF face=arial,verdana><h3>Artilharia do campeonato</h3></font>
					  </th>
					  </tr>
					  <tr bgcolor=#009900>
					  <td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
					  <td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Atleta</b></font></td>
					  <td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Gols</b></font></td>
					  </tr>";
					  
					  while ($linha2=mysql_fetch_array($rs_art)) {
						
						$equipe = $linha2['equipe'];
						$atleta = $linha2['atleta'];
						$gol = $linha2['gol'];
						
						echo "
							  <tr bgcolor=#ccff66>
							  <td align=left bgcolor=#ffff99 width=30%><font face=arial,verdana size=1><b>".$equipe."</b></font></td>
							  <td align=left><font face=arial,verdana size=1><b>".$atleta."</b></font></td>
							  <td align=center><font face=arial,verdana size=1><b>".$gol."</b></font></td>
							  </tr>";
							  }
						echo "</table>";
						
						echo "<table border=0 width=650>
					  <tr bgcolor=#009900>
					  <th colspan=6 valign=middle height=25>
					  <font color=#FFFFFF face=arial,verdana><h3>Classificação disciplinar</h3></font>
					  </th>
					  </tr>
					  <tr bgcolor=#009900>
					  <td align=center width=1%><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
					  <td align=center width=10%><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
					  <td align=center width=2%><font face=arial,verdana size=2 color=#FFFFFF><b>Class.</b></font></td>
					  <td align=center width=2%><font face=arial,verdana size=2 color=#FFFFFF><b>Pts</b></font></td>
					  <td align=center width=2%><font face=arial,verdana size=2 color=#FFFFFF><b>Aml</b></font></td>
					  <td align=center width=2%><font face=arial,verdana size=2 color=#FFFFFF><b>Ver</b></font></td>
					  </tr>";
						
						while ($linha3=mysql_fetch_array($rs2)) {
						
						$equipedisc = $linha3['equipe'];
						$ptdisc = $linha3['totalpt'];
						$classdisc = $linha3['classdisc'];
						$cartam = $linha3['cata'];
						$cartve = $linha3['catv'];						
						
						echo "
							  <tr bgcolor=#ccff66>
							  <td bgcolor=#ffffff align=center valign=middle width=1%><img src='logoc/".$linha3["id"].".jpg'></td>
							  <td align=left bgcolor=#ffff99 width=10%><font face=arial,verdana size=1><b>".$equipedisc."</b></font></td>
							  <td align=left width=2%><font face=arial,verdana size=1><b>".$classdisc."</b></font></td>
							  <td align=center width=2%><font face=arial,verdana size=1><b>".$ptdisc."</b></font></td>
							  <td align=center width=2% bgcolor=#ffff00><font face=arial,verdana size=1><b>".$cartam."</b></font></td>
							  <td align=center width=2% bgcolor=#ff0000><font face=arial,verdana size=1 color=#ffffff><b>".$cartve."</b></font></td>
							  </tr>
							  ";						
						}
				echo "</table>";
				
				echo "<table border=0 width=650>
				<tr><td>
				<table border=0 width=320>
					<tr bgcolor=#009900> 
    				<td colspan=3 valign=top align=center><h4><font face=arial,verdana color=#FFFFFF>Melhor ataque</font></h4></td>
  					</tr>
  					<tr bgcolor=#009900> 
    				<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
    				<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
   					<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GP</b></font></td>
  					</tr>
					  ";
					  
					  while ($linha4=mysql_fetch_array($rs3)) {
						
						$equipeatq = $linha4['equipe'];
						$gpat = $linha4['gp'];						
						
						echo "
							  <tr bgcolor=#ccff66>
							  <td bgcolor=#ffffff align=center valign=middle width=1%><img src='logoc/".$linha4["id"].".jpg'></td>
							  <td align=left bgcolor=#ffff99 width=10%><font face=arial,verdana size=1><b>".$equipeatq."</b></font></td>
							  <td align=left width=2%><font face=arial,verdana size=1><b>".$gpat."</b></font></td>
							  </tr>";
							  }
						echo "</table></td><td>
							<table border=0 width=320>
							<tr bgcolor=#009900> 
    						<td colspan=3 valign=top align=center><h4><font face=arial,verdana color=#FFFFFF>Melhor defesa</font></h4></td>
  							</tr>
							<tr bgcolor=#009900> 
    						<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Escudo</b></font></td>
    						<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>Equipe</b></font></td>
   							<td align=center><font face=arial,verdana size=2 color=#FFFFFF><b>GC</b></font></td>
  							</tr>";						
									
					 while ($linha5=mysql_fetch_array($rs4)) {
						
							$equipemd = $linha5['equipe'];
							$gcmd = $linha5['gc'];						
						
							echo "
							  <tr bgcolor=#ccff66>
							  <td bgcolor=#ffffff align=center valign=middle width=1%><img src='logoc/".$linha5["id"].".jpg'></td>
							  <td align=left bgcolor=#ffff99 width=10%><font face=arial,verdana size=1><b>".$equipemd."</b></font></td>
							  <td align=left width=2%><font face=arial,verdana size=1><b>".$gcmd."</b></font></td>
							  </tr>";						
						}						
					echo "</table></td></tr></table></td><tr></table>";						
		?>
    </td>
  </tr>
</table>
</body>
</html>
