<? include "biblio.fcn";?>
<?
include "conexao.php";

if ($opcao!= "")
{
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
<title>Cadastro de vendas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function validar(){
erro = 0;
msg = "Erro no preenchimento do formulário:\n\n";
	if (form1.nome.value==''){
		msg += "O Campo nome é obrigatório\n";
		erro = 1;
	}
/*	if (form1.endereco.value==''){
		msg += "O Campo Endereço é obrigatório\n";
		erro = 1;
	}
	if (form1.bairro.value==''){
		msg += "O Campo Bairro é obrigatório\n";
		erro = 1;
	}
	if (form1.cidade.value==''){
		msg += "O Campo Cidade é obrigatório\n";
		erro = 1;
	}
	if (form1.cep.value==''){
		msg += "O Campo Cep é obrigatório\n";
		erro = 1;
	}
	if (form1.fone.value==''){
		msg += "O Campo Fone é obrigatório\n";
		erro = 1;
	}
	if (form1.nascimento.value==''){
		msg += "O Campo Data de Nascimento é obrigatório\n";
		erro = 1;
	}
	if (form1.rg.value==''){
		msg += "O Campo RG é obrigatório\n";
		erro = 1;
	}
	if (form1.cpf.value==''){
		msg += "O Campo CPF é obrigatório\n";
		erro = 1;
	} else if (form1.cpf.value.length<14){
		msg += "CPF Inválido\n";
		erro = 1;
	}*/
	if (erro==1){
		alert (msg);
		return false;
	}
}
</script>
</head>
<body > 
<table width="90%" border="0" align="center" cellspacing="1" cellpadding="0">
 <tr> 
 <td width="80%" bgcolor="#660000">
 <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF0000">
        <form name="form1" action="cadvenda.php" onSubmit="return validar()">
         
		<tr>
		  <td height="20" align="center" bordercolor="#993300"  bgcolor="#993300"><font size="2" color="#FFFFFF"><strong> CADASTRO DE VENDA </strong></font></td>
        </tr>
		     
        <tr> <td height="20" bgcolor="#FFFFFF">
		 
		  <table width="100%" border="0" cellpadding="1" cellspacing="0" bordercolor="#FF00FF">
          <tr> <td colspan="5" align="right">&nbsp;</td></tr>
		  <tr>
		  	<td width="13%" align="right"><font size="1" color="#882418"><strong> CLIENTE </strong></font></td>
          	<td width="39%">
			<select name="id_cliente">
			<option> </option>
			<?php
				$sql = "select id_cliente, nome from cliente order by nome";
				$resultado = mysql_query($sql) or die ("não foi possível fazer a consulta de clientes");
				while ($registro = mysql_fetch_array($resultado))
				{
					$valor = $registro["id_cliente"];
					if ($id_cliente ==$valor)
					  $selecionado = "selected";
					 else
					  $selecionado = "";
					print "<option value = \"$valor\" $selecionado> $registro[nome] </option>";
				}
				mysql_free_result($resultado);
				?>			
            </select></td>
			<td width="8%" align="right"><font size="1" color="#882418"><strong> CURSO </strong></font></td>
			<td width="40%">
			<select name="id_curso">
			<option> </option>
			<?php
				$sql = "select * from curso order by curso";
				$resultado = mysql_query($sql) or die ("não foi possível fazer a consulta de cursos");
				while ($registro = mysql_fetch_array($resultado))
				{
					$valor1 = $registro["id_curso"];
					if ($id_curso ==$valor1)
					  $selecionado1 = "selected";
					 else
					  $selecionado1 = "";
					  
					print "<option value = \"$valor1\" $selecionado1 > $registro[curso] </option>";
				}
				mysql_free_result($resultado);
				?>						
          </tr>
		  
          <tr> <td colspan="5" align="right">&nbsp;</td></tr>
          
		  <tr>
             <td colspan="5" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td align="right"><font size="1" color="#993333"><strong>DATA DA VENDA </strong></font></td>
                 <td><input name="data_venda" type="text"  value="<? echo $data_venda ?>" size="15"></td>
                 <td><font size="1" color="#993333"><strong>DATA DE ENVIO </strong></font></td>
                 <td><input name="data_envio" type="text"  value="<? echo $data_envio ?>" size="15"></td>
                 <td><font size="1" color="#993333"><strong>VALOR PAGO </strong></font></td>
                 <td><input name="valor_pago" type="text" id="data_venda2" value="<? echo $valor_pago ?>" size="15"></td>
               </tr>
             </table></td>
             </tr>
          
		  <tr>
             <td colspan="5" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td><font size="1" color="#993333"><strong>RASTREAMENTO </strong></font></td>
                 <td><input name="codigo_rastreamento" type="text" value="<? echo $codigo_rastreamento?>" size="30" maxlength="30"></td>
                 <td><strong><font color="#993333" size="1">TIPO ENTREGA </font></strong></td>
                 <td>
				 	<select name="tipo_entrega">
                 	<option <? if ($tipo_entrega =="Sedex") echo "selected"?> > Sedex </option>
					<option <? if ($tipo_entrega =="carta Registrada") echo "selected"?>> carta Registrada </option>
					<option <? if ($tipo_entrega =="Em mãos") echo "selected"?> > Em mãos </option>					
					</select>				 </td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
             </table></td>
             </tr>
          
		 <tr>
           <td colspan="5" align="right">
		   <table width="100%" border="0">
           <tr>
            <td width="100%" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><strong><font color="#993333" size="1">TIPO PAGTO </font></strong></td>
                <td><select name="tipo_pagamento">
                  <option <? if ($tipo_pagamento =="Depósito") echo "selected"?> > Depósito </option>
                  <option <? if ($tipo_pagamento =="Transferência") echo "selected"?> > Transferência </option>
                  <option <? if ($tipo_pagamento =="Mercado Pago") echo "selected"?>> Mercado Pago </option>
                  <option <? if ($tipo_pagamento =="PagSeguro") echo "selected"?>> PagSeguro </option>
                </select></td>
                <td><font size="1" color="#993333"><strong>ENVIADO</strong></font></td>
                <td><select name="enviado">
                  <option value = "S" <? if ($enviado=="S") echo "selected"?> > Sim </option>
                  <option value = "N" <? if ($enviado=="N") echo "selected"?>> Não </option>
                </select></td>
                <td><font size="1" color="#993333"><strong>PAGO:</strong></font></td>
                <td><select name="pago">
                  <option value = "S" <? if ($pago =="S") echo "selected"?>> Sim </option>
                  <option value = "N" <? if ($pago =="N") echo "selected"?>> Não </option>
                </select></td>
                <td><font size="1" color="#993333" ><strong>ENTREGUE</strong></font></td>
                <td><select name="entregue">
                  <option value = "S" <? if ($entregue =="S") echo "selected"?>> Sim </option>
                  <option value = "N" <? if ($entregue =="N") echo "selected"?>> Não </option>
                </select></td>
              </tr>
            </table></td>
            </tr>
           </table>		   </td>
         </tr>      

		 <tr>
           <td colspan="5" align="right">&nbsp;</td>
           </tr>
 </table>
 </td>
</tr>
     	<tr>  
		<td height="20" bgcolor="#FFFFFF"> 
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
           <td height="30"> 
		   		<div align="center"> 
                 <? if ($opcao=="Alterar"){ ?>
                  <input name="opcao" type="hidden" id="opcao" value="Alterar">
                  <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo ?>">
                  <input name="image" type="image" src="imagens/bt_confalt.gif" width="150" height="20" border="0">
                 
				 <? } elseif ($opcao=="Excluir"){ ?>
                   <a href="cadvenda.php?opcao=Excluir&codigo=<? echo $codigo ?>"><img src="imagens/bt_confexc.gif" width="150" height="20" border="0"></a> 
                 <? } elseif ($opcao=="Consultar"){ ?>
                 <a href="formconsulta.php"><img src="imagens/bt_limpar.gif" width="100" height="20" border="0"></a> 
                 <? } else { ?>
                     <table cellspacing="5">
                      <tr> 
                      <td height="21"><input name="imageField" type="image" src="imagens/bt_incluir.gif" width="100" height="20" border="0"></td>
                      <td><a href="index.php?link=10&opcao=Consultar"><img src="imagens/bt_consultar.gif" width="100" height="20" border="0"></a></td>
                      <td><a href="index.php?link=10&opcao=Alterar"><img src="imagens/bt_alterar.gif" width="100" height="20" border="0"></a></td>
                       <td><a href="index.php?link=10&opcao=Excluir"><img src="imagens/bt_excluir.gif" width="100" height="20" border="0"></a></td>
                      </tr>
                      </table>
                      <? } ?>

                    </div></td>
                </tr>
              </table></td>
          </tr>
        </form>
      </table> 
    </td>

  </tr>

</table>

</body>

</html>

