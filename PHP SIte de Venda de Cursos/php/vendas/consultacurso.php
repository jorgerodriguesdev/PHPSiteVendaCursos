<? include "conexao.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
   <td bgcolor="#FDFFE8"><font color="#660000" size="4" face="Arial, Helvetica, sans-serif"><strong>:: <? echo $opcao ?> Curso</strong></font>   </td>
  </tr>
  <tr align="center"><td bgcolor="#FDFFE8">
  <table cellspacing="0">
  <form name="form1" method="get" action="">
    <tr>
      <td width="45"><font size="2"><strong>:</strong></font></td>
      <td width="155">&nbsp;</td>
      <td width="72"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Curso:</strong></font></td>
      <td width="148"><input name="curso" type="text"  size="40">
      </td>
      <td width="273"><input type="submit" name="Submit" value="Procurar">
          <input name="opcao" type="hidden" id="opcao" value="<? echo $opcao ?>">
          <input name="link" type="hidden" id="link" value="6">
      </td>
    </tr>
 </form>
  </table></td> 
  </tr>
  
    <td bgcolor="#FDFFE8">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
    <tr bgcolor="#993300" align="center">
	  <td width="40%" height="20"><strong><font size="2" color="#FFFFFF">CURSO</font></strong></td>
      <td width="35%" height="20" bgcolor="#993300"><strong><font size="2" color="#FFFFFF"> VALOR</font></strong></td>      
      <td width="6%" height="20"><strong><font size="2" color="#FFFFFF">opção</font></strong></td>
    </tr>
	
    <?
  if ($curso != "") {
    $sql="select * from curso where curso='$curso'";
  } else {
    $sql = "select * from curso limit 0,10";
  }
  $dados = mysql_query($sql);
  $linha = 0;
  while($linha < mysql_num_rows($dados)) {
  ?>
    <tr bgcolor="#FFFFFF">
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,curso) ?></font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,valor) ?></font></td>
      <td><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <? 
	if ($opcao=="Consultar"){
		$page = "index.php?link=8";
	} else {
		$page = "index.php?link=6";
	}
	?>
      <a href="<? echo "$page&opcao=$opcao&codigo=" . mysql_result($dados,$linha,id_curso) ?>"><img src="imagens/selec2.gif" width="20" height="20" border="0"></a></font></div></td>
    </tr>
    <?
  $linha += 1; 
  }
  ?>
  </table></td>
  </tr>
</table>
</body>
</html>
