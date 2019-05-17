<?php
include ("conexao.php");
$nome_alterar = $_POST["selecao"];

	$sql = "SELECT * FROM cliente WHERE nome='$nome_alterar'";
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
?>

<html>
<head>
<title> Curso Completo de PHP - www.mjailton.com.br </title>
</head>
<body>
<table width = "63%" border = "1" cellspacing = "0" align = "center" cellpadding = "0" bordercolor = "#000000">
<tr>
	<td> 
		<form name = "formcliente" method = "post" action="excluir.php">
		<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
			<tr align = "center"><td colspan="6">exclusão de Cadastro de clientes</td></tr>
			
			<tr> 
				<td> Nome:</td>
				<td colspan="5"><input name="nome" type = "text" size = "68" value ="<?print $nome?>">
				 <input name="codigo" type = "hidden" size = "68" value ="<?print $codigo?>">
				</td>
			</tr>
			<tr> 
				<td> endereco:</td>
				<td colspan="5"><input name="endereco" type = "text" size = "68" value ="<?print $endereco?>"></td>
			</tr>
			
			<tr> 
				<td> Bairro:</td>
				<td colspan="5"><input name="bairro" type = "text" size = "68" value ="<?print $bairro?>"></td>
			</tr>
			
			<tr>
				<td> Cidade:</td>
				<td width="38%"><input name="cidade" type = "text" size = "30" value ="<?print $cidade?>"v></td>
				<td width = "8%"> Cep:</td>
				<td width="20%"><input name="cep" type = "text" size = "15" value ="<?print $cep?>"> </td>
				<td width = "4%"> UF:</td>
				<td width="16%">				
				<select name="uf"> 
					<option>MA </option>
					<option>SP </option>
					<option>RJ </option>
					<option>RN </option>
					<option>MS </option>
					<option>CE </option>
					<option>SE </option>					
				</select>
				</td>
			</tr>
			
			<tr>
				<td> Fone:</td>
				<td width="38%"><input name="fone" type = "text" size = "30" value ="<?print $fone?>"></td>
				<td width = "8%"> CPF:</td>
				<td width="20%"><input name="cpf" type = "text" size = "15" value ="<?print $cpf?>"> </td>
			</tr>
			
			<tr>
				<td> Email:</td>
				<td colspan="5"><input name="email" type = "text" size = "68" value ="<?print $email?>"></td>				
			</tr>
			<tr>
				<td> Sexo:</td>	
				
				<td colspan="5"><input name="sexo" type = "radio" value = "M" <? if ($sexo=="M") {print "checked";}?>> Masculino				
				<input name="sexo" type = "radio" value = "F" <? if ($sexo=="F") {print "checked";}?>> Feminino</td>					
			</tr>
			<tr>
				
				<td colspan="6" align="center">	
				<input name="enviar" type = "submit" value = "excluir"> 
				
				</td>				
			</tr>
			
		</table>
		</form>	
	
	</td>
</tr>


</table>
</body>
</html>