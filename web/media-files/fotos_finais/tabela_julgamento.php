<?php
include "../conexao.inc";

$sq = "SELECT * FROM tb_julgamento WHERE pena='Falta Julgar' ORDER BY atleta";
$rs = mysql_query($sq) or die (mysql_error());
$num_linhas = mysql_num_rows($rs);

$sqr = "SELECT * FROM tb_julgamento WHERE resultado='R' ORDER BY atleta";
$rsr = mysql_query($sqr) or die (mysql_error());
$num_linhasr = mysql_num_rows($rsr);
?>

<html>
<head>
<title>Paulta de Julgamento</title>
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
    <td width="650" height="26" valign="top"><div align="center"><font color="#666666" size="3"><strong>Campeonato 
        de Futsal 2017</strong></font></div></td>
  </tr>
  <tr> 
    <td height="29" valign="top"><div align="center"><font color="#666666" size="3"><strong>Arivaldo 
        Ribeiro </strong></font></div></td>
  </tr>
  <tr> 
    <td height="19" valign="top"><div align="center"><font color="#666666" size="3"><strong>Atletas 
        a serem julgados</strong></font></div></td>
  </tr>
  <tr> 
    <td height="30" valign="top"><div align="center"><font color="#666666" size="2"><strong>Data 
        do Julgamento: 06/06/2017, &agrave;s 19:30h. </strong></font></div></td>
  </tr>
  <tr> 
    <td height="569" align="left" valign="top"> 
      <?php
	
	echo "<table border=0 width=650>
	
		</tr>
	<tr bgcolor=#ffffff>
	<td width=12% align=left><font face=arial,verdana size=1 color=#000000><b>Equipe</b></font></td>
	<td width=12% align=left><font face=arial,verdana size=1 color=#000000><b>Categoria</b></font></td>
	<td width=25% align=left><font face=arial,verdana size=1 color=#000000><b>Atleta</b></font></td>
	<td width=14% align=center><font face=arial,verdana size=1 color=#000000><b>Data do Jogo</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rs)) {
						
						$equipe = $linha['equipe'];
						$categoria = $linha['categoria'];
						$atleta = $linha['atleta'];
						$data = $linha['data'];
						$datahora = strtotime($data);
						$dataformat = date("d/m/y",$datahora);
						$idc = $linha['codigo'];						
						
						echo "
							  <tr bgcolor=#ffffff>
							  <td><font face=arial,verdana size=1><b>".$equipe."</b></font></td>
							  <td width=10%><font face=arial,verdana size=1><b>".$categoria."</b></font></td>
							 <td width=30%><font align=left><font face=arial,verdana size=1><b>".$atleta."</b></font></td>
							  <td width=10% align=center><font face=arial,verdana size=1><b>".$dataformat."</b></font></td>
							  </tr>
							  ";
						
						}
				echo "
				<tr bgcolor=#cccccc>
				<td colspan=2><font face=arial,verdana size=2 color=#666666><b>Nº de Processos: ".$num_linhas."</b></font></td>
				<td colspan=2><font face=arial,verdana size=1 color=#666666><b>Dados atualizados pela Coordenação do campeonato</b></font></td>
				</tr>
				<td colspan=6><font face=arial,verdana size=3 color=#666666><b>Últimos Resultados Publicado em: 08/06/2017 às 14:15</b></font></td>
				</tr>
	</tr>
	<tr bgcolor=#ffffff>
	<td width=12% align=left><font face=arial,verdana size=1 color=#000000><b>Equipe</b></font></td>
	<td width=12% align=left><font face=arial,verdana size=1 color=#000000><b>Categoria</b></font></td>
	<td width=25% align=left><font face=arial,verdana size=1 color=#000000><b>Atleta</b></font></td>
	<td width=12% align=center><font face=arial,verdana size=1 color=#000000><b>Artigo</b></font></td>
	<td width=12% align=center><font face=arial,verdana size=1 color=#000000><b>Pena</b></font></td>
	<td width=14% align=center><font face=arial,verdana size=1 color=#000000><b>Dt_Julgamento</b></font></td>
	</tr>";
	
						while ($linha=mysql_fetch_array($rsr)) {
						
						$equipe = $linha['equipe'];
						$categoria = $linha['categoria'];
						$atleta = $linha['atleta'];
						$artigo = $linha['artigo'];
						$pena = $linha['pena'];
						$data = $linha['datajulgamento'];
						$datahora = strtotime($data);
						$dataformat = date("d/m/y",$datahora);
						$idc = $linha['codigo'];						
						
						echo "
							  <tr bgcolor=#ffffff>
							  <td><font face=arial,verdana size=1><b>".$equipe."</b></font></td>
							  <td width=10%><font face=arial,verdana size=1><b>".$categoria."</b></font></td>
							<td width=40%><font align=left><font face=arial,verdana size=1><b>".$atleta."</b></font></td>
							 <td width=8% align=center><font face=arial,verdana size=1><b>".$artigo."</b></font></td>
							   <td width=8% aling=center><font face=arial,verdana size=1><b>".$pena."</b></font></td>
							  <td width=14% align=center><font face=arial,verdana size=1><b>".$dataformat."</b></font></td>
							  </tr>
							  ";
						
						}
				echo "
				<tr bgcolor=#cccccc>
				<td colspan=2><font face=arial,verdana size=1 color=#666666><b>Total de Resultados: ".$num_linhasr."</b></font></td>
				<td colspan=2><font face=arial,verdana size=1 color=#666666><b>Dados atualizados pela Coordenação do campeonato</b></font></td>
				</tr>
								
				</table>";
						
		?>
    </td>
  </tr>
  <tr> 
    <td height="27">&nbsp;</td>
  </tr>
</table>
</body>
</html>
