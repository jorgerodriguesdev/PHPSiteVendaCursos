<? include "conexao.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
   <td bgcolor="#FDFFE8"><font color="#660000" size="4" face="Arial, Helvetica, sans-serif"><strong>:: <? echo $opcao ?> Venda </strong></font>   </td>
  </tr>
  <tr align="center"><td bgcolor="#FDFFE8">
  <table cellspacing="0" width="83%" align="center">
  <form name="form1" method="get" action="">
    <tr>
      <td width="28">m&ecirc;s</td>
      <td width="88"><select name="mes">
	  <option> </option>
	  <option> 01 </option>
	  <option> 02 </option>
	  <option> 03 </option>
	  <option> 04 </option>
	  <option> 05 </option>
	  <option> 06 </option>
	  <option> 07 </option>
	  <option> 08 </option>
	  <option> 09 </option>
	  <option> 10 </option>
	  <option> 11 </option>
	  <option> 12 </option>
      </select>      </td>
      <td width="97" ><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cliente:</strong></font></td>
      <td width="344" ><input name="nome" type="text" id="nome2" size="30">      </td>
      <td width="266" ><input type="submit" name="Submit" value="Procurar">
          <input name="opcao" type="hidden" id="opcao" value="<? echo $opcao ?>">
          <input name="link" type="hidden" id="link" value="10">      </td>
    </tr>
 </form>
  </table></td> 
  </tr>
  
    <td bgcolor="#FDFFE8">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#660000">
    <tr bgcolor="#993300" align="center">
	  <td width="40%" height="20"><strong><font size="2" color="#FFFFFF">CLIENTE</font></strong></td>
      <td width="35%" height="20" bgcolor="#993300"><strong><font size="2" color="#FFFFFF"> CURSO</font></strong></td>
      <td width="19%" height="20"><strong><font color="#FFFFFF" size="2">DATA</font></strong></td>
      <td width="6%" height="20"><strong><font size="2" color="#FFFFFF">opção</font></strong></td>
    </tr>
	
    <?
  if ($mes!= "") {
    $sql = "";
  } elseif ($nome != "") {
    $sql = "select v.*,cur.*,cli.* from vendas v, curso cur, cliente cli 
	where v.id_curso = cur.id_curso and v.id_cliente = cli.id_cliente and
	cli.nome like '$nome%'	";
  } else {
    $sql = "select v.*,cur.*,cli.* from vendas v, curso cur, cliente cli 
	where v.id_curso = cur.id_curso and v.id_cliente = cli.id_cliente";
  }
  $dados = mysql_query($sql);
  $linha = 0;
  while($linha < mysql_num_rows($dados)) {
  ?>
    <tr bgcolor="#FFFFFF">
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,nome) ?></font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,curso) ?></font></td>
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><? echo mysql_result($dados,$linha,data_venda) ?></font></td>
      <td><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <? 
	if ($opcao=="Consultar"){
		$page = "index.php?link=11";
	} else {
		$page = "index.php?link=9";
	}
	?>
      <a href="<? echo "$page&opcao=$opcao&codigo=" . mysql_result($dados,$linha,id_venda) ?>"><img src="imagens/selec2.gif" width="20" height="20" border="0"></a></font></div></td>
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
