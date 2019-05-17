<? include ("conexao.php"); 
$opcao 	= $_GET["opcao"];
$codigo = $_GET["codigo"];

if ($opcao != "")
{
	$sql = "SELECT * FROM cliente WHERE id_cliente = '$codigo'";
	$resultado = mysql_query($sql) or die ("não foi possível executar a consulta");
	$linha = mysql_fetch_array($resultado);

$nome 		= $linha[nome];
$endereco 	= $linha[endereco];
$bairro 	= $linha[bairro];
$complemento= $linha[complemento];
$cidade 	= $linha[cidade];
$uf 		= $linha[uf];
$cep 		= $linha[cep];
$fone 		= $linha[fone];
$email 		= $linha[email];
$sexo 		= $linha[sexo];
$apelido 	= $linha[apelido];
}

?>

<html>
<head>
<title> Controle de Alunos - mmjailton.com.br </title>
<script language="JavaScript">
function validar(){
erro = 0;
msg = "Erro no preenchimento do formulário:\n\n";
	if (form1.nome.value==''){
		msg += "O Campo nome é obrigatório\n";
		erro = 1;
	}
	if (form1.endereco.value==''){
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
			
	if (erro==1){
		alert (msg);
		return false;
	}
}
</script>

</head>
<body>
<table border = "0" align = "center" cellspacing = "1" cellpadding = "0">
<tr>
<td bgcolor = "#660000">
	<table width = 100% border="1" cellspacing = "0" bordercolor = "#FF0000">
        <form name="form1" action="cadcliente.php" onSubmit="return validar()">
         
		<tr><td height="20" align="center" bordercolor="#993300"  bgcolor="#993300"><font size="2" color="#FFFFFF"><strong>CADASTRO DE CLIENTE</strong></font></td>
        </tr>
		     
        <tr> <td height="20" bgcolor="#FFFFFF">
		 
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
          <tr>
		  	<td width="14%" align="right"><font size="1" color="#882418"><strong> NOME </strong></font></td>
          	<td><input name="nome" type="text" id="nome" value="<? echo $nome ?>" size="68" maxlength="80"></td>
          </tr>
		  
          <tr>
             <td align="right"><font size="1" color="#993333"><strong>ENDERE&Ccedil;O </strong></font></td>
             <td> <input name="endereco" type="text" id="endereco2" value="<? echo $endereco ?>" size="68" maxlength="80"></td>
          </tr>
          
		  <tr>
             <td align="right"><font size="1" color="#993333"><strong>COMPLEMENTO</strong></font></td>
            <td><input name="complemento" type="text" id="endereco3" value="<? echo $complemento ?>" size="68" maxlength="80"></td>
          </tr>
          
		  <tr>
             <td align="right"><font size="1" color="#993333"><strong>BAIRRO</strong></font></td>
             <td><input name="bairro" type="text" id="bairro3" value="<? echo $bairro ?>" size="68" maxlength="60"></td>
          </tr>
          
		 <tr>
           <td colspan="2" align="right">
		   <table width="100%" border="0">
           <tr>
            <td align="right" width="16%"><font size="1" color="#993333"><strong>CIDADE</strong></font></td>
            <td width="36%"><input name="cidade" type="text" id="cidade3" value="<? echo $cidade ?>" size="30" maxlength="30"></td>
            <td width="8%"><font size="1" color="#993333"><strong>CEP:</strong></font></td>
            <td width="20%"> <input name="cep" type="text" id="cep5" value="<? echo $cep ?>" size="15"></td>
            <td width="4%"><font size="1" color="#993333" ><strong>UF</strong></font></td>
            <td width="16%">
                      <select name="estado">
                      <option value="PI" <? if ($estado=="PI"){ echo "selected"; } ?> >PI</option>
                      <option value="MA" <? if ($estado=="MA"){	echo "selected"; } ?> >MA</option>
                      <option value="CE" <? if ($estado=="CE"){	echo "selected"; } ?> >CE</option>
                      <option value="SP" <? if ($estado=="SP"){	echo "selected"; } ?> >SP</option>
                      </select>
             </td>
           </tr>
           </table>
		   </td>
         </tr>
         
		 <tr>
          <td colspan="2" align="right">
		  <table width="100%" border="0" bordercolor="#FFFF00">
            <tr>
			 <td width="16%" align="right"><font size="1" color="#993333"><strong>FONE</strong></font></td>
             <td width="22%"><input name="fone" type="text" id="fone" value="<? echo $fone ?>" size="15"></td>
             <td width="11%" align="right"><font size="1"  color="#996633"><strong>SEXO</strong></font></td>
             <td width="19%">
                 <select name="sexo" >
                   <option value="M" <? if ($sexo=="M"){echo "selected";} ?> >Masculino</option>
                   <option value="F" <? if ($sexo=="F"){echo "selected";} ?> > Feminino</option>
                 </select>
              </td>
              <td width="6%" align="right"><font size="1" color="#993333"><strong>APELIDO</strong></font></td>
              <td width="26%"><input name="apelido" type="text" id="apelido" value="<? echo $apelido ?>" size="20"></td>
              </tr>
          </table>
		  </td>
         </tr>
         
		 <tr>
           <td align="right"><font size="1" color="#993300"><strong> E-MAIL</strong></font></td>
           <td align="left"><input name="email" type="text" id="email" value="<? echo $email ?>" size="68" maxlength="80"></td>
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
                  <a href="cadcliente.php?opcao=Excluir&codigo=<? echo $codigo ?>"><img src="imagens/bt_confexc.gif" width="150" height="20" border="0"></a> 		  
                 
				 <? } elseif ($opcao=="Consultar"){ ?>
                 <a href="formcliente.php"><img src="imagens/bt_limpar.gif" width="100" height="20" border="0"></a> 
				 
                 <!-- Opção de inclusão -->
				 <? } else { ?>
                     <table cellspacing="5">
                      <tr> 
                      <td height="21"><input name="imageField" type="image" src="imagens/bt_incluir.gif" width="100" height="20" border="0"></td>
                      <td><a href="index.php?link=3&opcao=Consultar"><img src="imagens/bt_consultar.gif" width="100" height="20" border="0"></a></td>
                      <td><a href="index.php?link=3&opcao=Alterar"><img src="imagens/bt_alterar.gif" width="100" height="20" border="0"></a></td>
                       <td><a href="index.php?link=3&opcao=Excluir"><img src="imagens/bt_excluir.gif" width="100" height="20" border="0"></a></td>
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