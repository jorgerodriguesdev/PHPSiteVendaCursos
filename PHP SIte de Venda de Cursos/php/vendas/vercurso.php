<? include "conexao.php";
if ($opcao!= ""){

	$sql = "SELECT * FROM curso WHERE id_curso='$codigo'";
	$resultado = mysql_query($sql) or die("não foi possível executar a consulta");
	
	$linha = mysql_fetch_array($resultado);
	
	$codigo 	= $linha[id_curso];
	$curso 		= $linha[curso];
	$valor	 	= $linha[valor];
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<table width="90%" border="0" align="center" cellspacing="1">
  <tr>
  <td bgcolor="#660000"> 
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="cadcliente.php" onSubmit="return validar()">
    <tr > 
    <td height="1" bgcolor="#993300" align="center"><font size="2" color="#FFFFFF" ><strong>DADOS DO CURSO</strong></font></td>
    </tr> 
          <tr> 
             <td bgcolor="#FFFFFF">
			 <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td>&nbsp;</td>
                </tr>
              </table>
			   
           <table width="95%" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#000000">
            <tr bgcolor="#FFFFFF"> 
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >CURSO: <font color="#FF0000"> <? echo $curso ?><br>  </font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">VALOR: <font color="#FF0000"> <? echo $valor ?></font></strong></td>
            </tr>
             </table>
              <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td>&nbsp;</td>
                </tr>
              </table> </td>
          </tr>
        </form>
      </table> 
    </td>
  </tr>
</table>
<br>

</body>
</html>
