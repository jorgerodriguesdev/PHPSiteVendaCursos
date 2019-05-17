<? include "conexao.php"; 
$cur  = $_GET["cur"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td colspan="4">
  <table width=100% cellpadding="0" cellspacing="0" border="0" >
	<?php
	print " 
	<tr><td colspan=2 height=3 background=\"imagens/fundo_pontilhado.gif\"></td></tr>
	<tr><td colspan=2 height=3 background=\"imagens/fundo_pontilhado.gif\"></td></tr>";
	
	$sql_curso="select * from curso where id_curso='$_GET[cur]'";
	$query_curso=mysql_query($sql_curso);
	$categoria=mysql_fetch_array($query_curso);
	
	print "
	<tr><td colspan=2 height=3><font class=\"menutopo_cinza\">Curso</font> <img src=\"imagens/seta.gif\">&nbsp;&nbsp;<em><a href=\"?cur=$categoria[id_curso]\"><font color=red>$categoria[curso]</font></a></em></font></td></tr>
	<tr><td colspan=2 height=3 background=\"imagens/fundo_pontilhado.gif\"></td></tr>
	<tr><td colspan=2 height=3 background=\"imagens/fundo_pontilhado.gif\"></td></tr>
	";?>
	</table>
	</td> 
  </tr>

  
    
	
	<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000" valign = "top">
    <tr bgcolor="#993300" align="center">
	  <td width="40%" height="20"><strong><font size="2" color="#FFFFFF">CLIENTE</font></strong></td>
      <td width="35%" height="20" bgcolor="#993300"><strong><font size="2" color="#FFFFFF"> CURSO</font></strong></td>
      <td width="19%" height="20"><strong><font color="#FFFFFF" size="2">DATA</font></strong></td>
      <td width="6%" height="20"><strong><font size="2" color="#FFFFFF">Rastreamento</font></strong></td>
    </tr>
	
    <? 
    $sql = "select v.*,cur.*,cli.* from vendas v, curso cur, cliente cli 
	where v.id_curso = cur.id_curso and v.id_cliente=cli.id_cliente and	v.id_curso = '$cur'";
  
  $dados = mysql_query($sql);
  $linha = 0;
  while($linha < mysql_num_rows($dados)) {
  ?>
    <tr bgcolor="#FFFFFF">
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,nome) ?></font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,curso) ?></font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,data_venda) ?></font></td>
     <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,codigo_rastreamento) ?></font></td>        
     
    <?
  $linha += 1; 
  }
  ?>
  </table></td>
  </tr>
</table>
</body>
</html>
