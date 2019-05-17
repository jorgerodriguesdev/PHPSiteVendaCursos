<? include "conexao.php";
$opcao		= $_GET["opcao"];
$codigo		= $_GET["codigo"];

if ($opcao!= ""){

	$sql = "select * from cliente where id_cliente='$codigo'";
	$resultado = mysql_query($sql) or die("não foi possível executar a consulta");
	
	$linha = mysql_fetch_array($resultado);
	
	$codigo 	= $linha[id_cliente];
	$nome 		= $linha[nome];
	$endereco 	= $linha[endereco];
	$bairro 	= $linha[bairro];
	$cep 		= $linha[cep];
	$cidade 	= $linha[cidade];
	$estado 	= $linha[estado];
	$fone 		= $linha[fone];
	$email 		= $linha[email];
	$cpf 		= $linha[cpf];
	$sexo 		= $linha[sexo];
	$apelido	= $linha[apelido];
}
?>

<html>
<head>
<title>Cadastro de Clientes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<table width="90%" border="0" align="center" cellspacing="1">
  <tr>
  <td bgcolor="#660000"> 
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="cadcliente.php" onSubmit="return validar()">
    <tr > 
    <td height="1" bgcolor="#993300" align="center"><font size="2" color="#FFFFFF" ><strong>DADOS DO CLIENTE </strong></font></td>
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
              <td colspan="4"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >NOME: <font color="#FF0000"> <? echo $nome ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
              <td colspan="4"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >ENDEREÇO: <font color="#FF0000"><? echo $endereco ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
              <td colspan="4"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >COMPLEMENTO: <font color="#FF0000"> <? echo $complemento ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
               <td colspan="4"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >BAIRRO: <font color="#FF0000"><? echo $bairro ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
            <td colspan="2"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >CIDADE: <font color="#FF0000"> <? echo $cidade ?><br>  </font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">CEP: <font color="#FF0000"> <? echo $cep ?></font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">ESTADO:<font color="#FF0000"> <? echo $estado ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">FONE: <font color="#FF0000"> <? echo $fone ?></font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">SEXO:<font color="#FF0000"> <? echo $celular ?> </font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">APELIDO:<? echo $apelido ?></font></strong></td>
           <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;<font color="#FF0000"></font></strong></td>
           </tr>
             <tr bgcolor="#FFFFFF"> 
             <td colspan="4"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">E-MAIL: <font color="#FF0000"><font color="#FF0000"><? echo $email ?></font></strong></td>
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
