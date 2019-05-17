<? include "biblio.fcn"; ?>
<? include "conexao.php";
if ($opcao!= ""){

	$sql = "select v.*,cli.nome as cliente,
	  		cur.curso as curso from vendas v, cliente cli, curso cur where v.id_curso=cur.id_curso and
			v.id_cliente = cli.id_cliente and v.id_venda='$codigo'";
		
	$resultado = mysql_query($sql) or die("não foi possível executar a consulta");
	
	$linha = mysql_fetch_array($resultado);
	
$id_cliente 		= $linha[id_cliente];
$cliente 			= $linha[cliente];
$id_curso 			= $linha[id_curso];
$curso	 			= $linha[curso];
$data_venda 		= databr($linha[data_venda],0);
$data_envio 		= databr($linha[data_envio],0);
$codigo_rastreamento= $linha[codigo_rastreamento];
$valor_pago			= number_format($linha[valor_pago],2);
$tipo_entrega		= $linha[tipo_entrega];
$tipo_pagamento 	= $linha[tipo_pagamento];
$pago 				= $linha[pago];
$envado 			= $linha[enviado];
$recebido 			= $linha[recebido];
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
    <td height="1" bgcolor="#993300" align="center"><font size="2" color="#FFFFFF" ><strong>DADOS DA VENDA </strong></font></td>
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
              <td colspan="4"><strong><font size= "1" face="Verdana, Arial, Helvetica, sans-serif" >CLIENTE: <font color="#FF0000"> <? echo $cliente ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
              <td colspan="2"><strong><font size= "1" face= "Verdana, Arial, Helvetica, sans-serif" >CURSO: <font color="#FF0000"><? echo $curso ?></font></strong></td>
              <td colspan="2"><strong><font size= "1" face= "Verdana, Arial, Helvetica, sans-serif" >CODIGO DE RASTREAMENTO : <font color="#FF0000"><? echo $codigo_rastreamento ?></font></strong></td>
              </tr>
            <tr bgcolor="#FFFFFF"> 
            <td colspan="2"><strong><font size="1" face= "Verdana, Arial, Helvetica, sans-serif" >DATA VENDA: <font color="#FF0000"> <? echo $data_venda ?><br>  </font></strong></td>
            <td><strong><font size="1" face= "Verdana, Arial, Helvetica, sans-serif">DATA ENVIO: <font color="#FF0000"> <? echo $data_envio ?></font></strong></td>
            <td><strong><font size="1" face= "Verdana, Arial, Helvetica, sans-serif">VALOR PAGO :<font color="#FF0000"> <? echo"R$ ". $valor_pago ?></font></strong></td>
            </tr>
            <tr bgcolor="#FFFFFF"> 
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">PAGO: <font color="#FF0000"> <? echo $pago ?></font></strong></td>
            <td><strong><font size="1" face= "Verdana, Arial, Helvetica, sans-serif">ENVIADO:<font color="#FF0000"> <? echo $enviado ?> </font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">RECEBIDO:<? echo $recebido ?></font></strong></td>
           <td><strong><font size="1" face= "Verdana, Arial, Helvetica, sans-serif">&nbsp;ENVIADO:<font color="#FF0000"> <? echo $enviado ?> </font><font color="#FF0000"></font></strong></td>
           </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
