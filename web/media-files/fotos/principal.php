<?php
include "conexao.inc";

$sql_busca = "SELECT * FROM tb_enquete";
$result_busca = mysql_query($sql_busca) or die (mysql_error());

while ($linha=mysql_fetch_array($result_busca)) {
	
	  			$titulo = $linha['titulo'];
				break;
			}
			
$sql_busca2 = "SELECT * FROM tb_enquete";
$result_busca2 = mysql_query($sql_busca2) or die (mysql_error());

$sql_not1 = "SELECT * FROM tb_noticias WHERE id='1'";
$result_not1 = mysql_query($sql_not1) or die (mysql_error());

while ($linha1=mysql_fetch_array($result_not1)) {
	
	  			$titulonot = $linha1['titulo'];
				$foto1 = $linha1['foto1'];
      			$texto1 = $linha1['texto1'];
				$foto2 = $linha1['foto2'];
      			$texto2 = $linha1['texto2'];
				$foto3 = $linha1['foto3'];
      			$texto3 = $linha1['texto3'];
       }

?>

<html>
<head>
<title>Principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript" type="text/javascript">
	function validaForm(){
          d = document.form1;
		//validar opção
        if (!d.opcao[0].checked && !d.opcao[1].checked && !d.opcao[2].checked && !d.opcao[3].checked) {
                   alert("Escolha uma opção!")
                  return false;
        }
    window.open('enquete.php','voto',' toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=320,height=300');
    return true;    
	}
</script>

</head>

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000" leftmargin="20" topmargin="0" marginwidth="0" marginheight="0">
<table width="614" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td height="138" colspan="9" valign="top"> <img name="topo_interno" src="imagens/topo_interno.gif" width="611" height="138" border="0" alt=""> 
    </td>
    <td width="1"></td>
    <td width="2"></td>
  </tr>
  <tr> 
    <td height="19" colspan="3" valign="top"><img src="fotos/titulo.jpg" width="190" height="17"></td>
    <td width="10">&nbsp;</td>
    <td colspan="4" rowspan="2" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="212" height="20">
        <param name="movie" value="fotos/tituloP.swf">
        <param name="quality" value="high">
        <embed src="fotos/tituloP.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="212" height="20"></embed></object></td>
    <td width="112">&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td width="112" height="13"></td>
    <td width="73"></td>
    <td width="15"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="4"></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="95"></td>
    <td width="17"></td>
    <td width="114"></td>
    <td width="63"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="19" colspan="6" valign="top"><font color="#000066" size="2"><em>APCEF: 
      Promovendo o que h&aacute; de melhor em campeonato !</em></font><font size="2">&nbsp;</font></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="34" colspan="10" valign="top"> <img src="imagens/topo_noticia.gif" alt="" name="topo_noticia" width="612" height="34" border="0" usemap="#topo_noticiaMap"></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="5" rowspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td colspan="2" rowspan="2" valign="top"><img src="fotos/titulojg3.jpg" width="298" height="25"></td>
          <td width="1" height="20"></td>
          <td width="1">&nbsp;</td>
        </tr>
        <tr> 
          <td height="5"></td>
          <td rowspan="8" valign="top" bgcolor="#009900"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr> 
          <td width="150" height="144" valign="top"><img src="fotos/fprimavera.jpg" width="150" height="144"></td>
          <td width="148" valign="top"><div align="justify"><font size="2">A equipe 
              do Primavera enfrenta o time do Estrela, nesta ter&ccedil;a(25.09) 
              o time do Primavera caso ven&ccedil;a assumir&aacute; a sexta coloca&ccedil;&atilde;o, 
              mas &eacute; bom lembrar que o Estrela tem um dos artilheiros da 
              competi&ccedil;&atilde;o (JJ) com 11 gols . <a href="paginas/noticia7.htm" target="centro"><strong>Veja 
              mais</strong> </a><br>
              </font></div></td>
          <td></td>
        </tr>
        <tr> 
          <td height="19" colspan="2" valign="top">------------------------------------------------</td>
          <td></td>
        </tr>
        <tr> 
          <td height="25" colspan="2" valign="top"><img src="fotos/titulojg2.jpg" width="298" height="25"></td>
          <td></td>
        </tr>
        <tr> 
          <td height="144" valign="top"><img src="fotos/fj11.jpg" width="150" height="144"></td>
          <td rowspan="2" valign="top"><div align="justify"><font size="2">A equipe 
              do Santa Cruz enfrenta o time do Fortaleza nesta ter&ccedil;a(25.09) 
              &aacute;s 20:55, a equipe do Fortaleza ainda n&atilde;o perdeu nesta 
              temporada e ocupa a 3&ordf; coloca&ccedil;&atilde;o com 17 pontos, 
              j&aacute; o time do Santa Cruz &eacute; o 7&ordm; colocado com 13 
              pontos. <a href="paginas/tabela_livre.php" target="centro"><strong><font color="#FF0000">Classifica&ccedil;&atilde;o</font></strong></a></font></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td height="21">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td height="7"></td>
          <td></td>
          <td></td>
        </tr>
        <tr> 
          <td colspan="2" rowspan="2" valign="top">------------------------------------------------</td>
          <td height="13"></td>
        </tr>
        <tr> 
          <td height="6"></td>
          <td></td>
        </tr>
      </table></td>
    <td height="357" colspan="6" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr> 
          <td height="19" colspan="3" valign="top"><img src="fotos/titulo2.jpg" width="307" height="19"></td>
        </tr>
        <tr> 
          <td width="156" height="144" valign="top"><div align="justify"> 
              <p><font size="2"> A equipe do <strong>Guar&aacute; </strong>(foto) 
                aplicou uma sonora goleada na equipe do Real terraviva (8x2) e 
                lidera tabela de classifica&ccedil;&atilde;o, destaque para Adelman 
                que marcou tr&ecirc;s vezes e &eacute; o atrilheiro.<font color="#0000CC"><strong><a href="paginas/noticia5.htm" target="centro">Mais 
                esportes</a>... <a href="sumula/lista_jogadores_quarenta.pdf" target="centro"><strong>Lista 
                de Atletas</strong></a></strong></font></font></p>
            </div></td>
          <td width="150" valign="top"><img src="fotos/ftq1.jpg" width="150" height="144"></td>
          <td width="3">&nbsp;</td>
        </tr>
        <tr> 
          <td height="27" colspan="2" valign="top"><img src="fotos/tituloQ3.jpg" width="307" height="19"></td>
          <td></td>
        </tr>
        <tr> 
          <td height="144"><div align="justify"><font size="2"><strong>Liverpool 
              e S&atilde;o Lu&iacute;s </strong>abrem a 2&ordf; rodada do campeonato 
              nesta quarta feira (26.09) &aacute;s 19:30 e o Nacional (foto) que 
              estreiou com vit&oacute;ria contra o Liverpool(5x3) vai enfrentar 
              o time de Eus&eacute;bio e Rubens (Santa Cruz) l&iacute;de do campeonato 
              &aacute;s 20:55.</font></div></td>
          <td valign="top"><img src="fotos/nacional.jpg" width="150" height="144"></td>
          <td></td>
        </tr>
        <tr> 
          <td height="15" colspan="2" valign="top">--------------------------------------------------</td>
          <td></td>
        </tr>
        <tr> 
          <td height="4"></td>
          <td></td>
          <td></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td height="27" colspan="4" valign="top"><img src="fotos/titulofusalcampeao.jpg" width="300" height="27"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="20" colspan="4" valign="top"><img src="fotos/campeonatosesi.jpg" width="305" height="27"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="72" colspan="4" valign="top"> <table border="0" bgcolor="#CCFF33" width="100%" cellpadding="3" cellspacing="3">
        <!--DWLayoutTable-->
        <tr bgcolor="#009900"> 
          <td width="218" height="24" valign="top" bgcolor="#6699FF"> <b><font size="2" face="Arial, Helvetica, sans-serif" color="#FFFFFF"> 
            <?php echo $titulo; ?></font></b> </td>
        </tr>
        <tr> 
          <td height="24" valign="top" bgcolor="#000033"> 
            <?php
					  echo "<form name='form1' action='paginas/enquete.php' method='get' onSubmit='return validaForm()' target='voto'>";
        				while ($registro = mysql_fetch_array($result_busca2)) {
        				$id = $registro['id'];
        				$descricao = $registro['descricao'];
        				echo "
        				<input type='radio' name='opcao' value='$id'> <font size='2' face='arial,verdana' color=#ffffff>".$descricao."</font><br>";
        				}
        				echo "<input type='submit' value='Votar'>
            				</form>";
			 ?>
          </td>
        </tr>
        <tr> 
          <td height="12"></td>
        </tr>
      </table></td>
    <td colspan="3" rowspan="4" valign="top"><div align="justify"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">A 
        equipe de futsal feminino da APCEF/MA, conseguiu mais um trof&eacute;u 
        de forma invicta para sua galeria. Venceu na partida final o forte time 
        da Vale pelo placar de 3x2. A competi&ccedil;&atilde;o foi realizada no 
        gin&aacute;sio so SESI no Ara&ccedil;agy, contando com a presen&ccedil;a 
        de um grande p&uacute;blico que prestigiou os jogos com vibra&ccedil;&atilde;o.</font></div></td>
    <td colspan="4" rowspan="4" valign="top"><img src="fotos/foto_feminino.jpg" width="178" height="171"></td>
  </tr>
  <tr> 
    <td height="1"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td rowspan="2" valign="top"><img src="fotos/apcefsaude.jpg" width="112" height="98"></td>
    <td height="59" valign="top"><img src="fotos/logoapcef.jpg" width="70" height="55" border="0" usemap="#Map"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td height="39">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
<map name="topo_noticiaMap">
  <area shape="rect" coords="118,7,175,35" href="paginas/tabela_geral_livre.php" target="centro">
  <area shape="rect" coords="180,6,276,40" href="paginas/tabela_livre.php" target="centro">
  <area shape="rect" coords="462,6,511,35" href="paginas/tabela_geral_quar.php" target="centro">
  <area shape="rect" coords="513,6,611,34" href="paginas/tabela_quarentao.php" target="centro">
</map>
<map name="Map">
  <area shape="rect" coords="-212,-10,-136,42" href="http://www.apcefma.org.br" target="_blank">
</map>
</body>
</html>
