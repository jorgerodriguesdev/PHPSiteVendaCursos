<?
include "conexao.php";
$codigo 	= $_GET["codigo"];
$opcao 		= $_GET["opcao"];

if ($opcao!= ""){

	$sql = "SELECT * FROM curso WHERE id_curso='$codigo'";
	$resultado = mysql_query($sql) or die("não foi possível executar a consulta");
	
	$linha = mysql_fetch_array($resultado);	
	
	$curso 		= $linha[curso];
	$valor	 	= $linha[valor];
} 
?>
<html>
<head>
<title>Cadastro de Cursos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function validar(){
erro = 0;
msg = "Erro no preenchimento do formulário:\n\n";
	if (form1.curso.value==''){
		msg += "O Campo nome é obrigatório\n";
		erro = 1;
	}
	if (form1.valor.value==''){
		msg += "O Campo Endereço é obrigatório\n";
		erro = 1;
	}
	if (erro==1){
		alert (msg);
		return false;
	}
}
</script>
</head>
<body > 
<table width="446" border="0" align="center" cellpadding="0" cellspacing="1">
 <tr> 
 <td width="444" bgcolor="#FFFFFF">
 <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <form name="form1" action="cadcurso.php" onSubmit="return validar()">
         
		<tr>
		  <td height="20" align="center" bordercolor="#993300"  bgcolor="#993300"><font size="2" color="#FFFFFF"><strong>CADASTRO DE CURSOS</strong></font></td>
        </tr>
		     
        <tr> <td height="20" bgcolor="#FFFFFF">
		 
		  <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
		  	<td colspan="2"><font size="1" color="#882418"><strong>. </strong></font></td>          	
          </tr>
		  <tr>
		  	<td width="30%" align="right"><font size="1" color="#882418"><strong> NOME DO CURSO </strong></font></td>
          	<td width="70%"><input name="curso" type="text" id="curso" value="<? echo $curso ?>" size="40" maxlength="40"></td>
          </tr>
		  
          <tr>
             <td align="right"><font size="1" color="#993333"><strong>VALOR DO CURSO </strong></font></td>
             <td> <input name="valor" type="text" id="valor" value="<? echo $valor ?>" size="20" maxlength="20"></td>
          </tr>
		   <tr>
		  	<td colspan="2"><font size="1" color="#882418"><strong>. </strong></font></td>          	
          </tr>
 </table>
 </td>

</tr>
     	<tr>  
		<td height="20" bgcolor="#FFFFFF"> 
		<table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr> 
           <td height="30"> 
		   		<div align="center"> 
                 <? if ($opcao=="Alterar"){ ?>
                  <input name="opcao" type="hidden" id="opcao" value="Alterar">
                  <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo ?>">
                  <input name="image" type="image" src="imagens/bt_confalt.gif" width="150" height="20" border="0">
                 
				 <? } elseif ($opcao=="Excluir"){ ?>
                   <a href="cadcurso.php?opcao=Excluir&codigo=<? echo $codigo ?>"><img src="imagens/bt_confexc.gif" width="150" height="20" border="0"></a> 
                 <? } elseif ($opcao=="Consultar"){ ?>
                 <a href="formcurso.php"><img src="imagens/bt_limpar.gif" width="100" height="20" border="0"></a> 
                 <? } else { ?>
                     <table cellspacing="5">
                      <tr> 
                      <td height="21"><input name="imageField" type="image" src="imagens/bt_incluir.gif" width="100" height="20" border="0"></td>
                      <td><a href="index.php?link=7&opcao=Consultar"><img src="imagens/bt_consultar.gif" width="100" height="20" border="0"></a></td>
                      <td><a href="index.php?link=7&opcao=Alterar"><img src="imagens/bt_alterar.gif" width="100" height="20" border="0"></a></td>
                       <td><a href="index.php?link=7&opcao=Excluir"><img src="imagens/bt_excluir.gif" width="100" height="20" border="0"></a></td>
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

