<?php
include ("validarcookie.php");
?>
<html>
<head>
<title> Curso Completo de PHP Aluno Jorge - www.mjailton.com.br </title>
</head>
<body>
<table width = "63%" border = "1" cellspacing = "0" align = "center" cellpadding = "0" bordercolor = "#000000">
<tr>
	<td> 
		<form name = "formcliente" method = "post" action="gravar.php">
		<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
			<tr align = "center"><td colspan="6"> Cadastro de clientes</td></tr>
			
			<tr> 
				<td> Nome:</td>
				<td colspan="5"><input name="nome" type = "text" size = "68"></td>
			</tr>
			<tr> 
				<td> endereco:</td>
				<td colspan="5"><input name="endereco" type = "text" size = "68"></td>
			</tr>
			
			<tr> 
				<td> Bairro:</td>
				<td colspan="5"><input name="bairro" type = "text" size = "68"></td>
			</tr>
			
			<tr>
				<td> Cidade:</td>
				<td width="38%"><input name="cidade" type = "text" size = "30"></td>
				<td width = "8%"> Cep:</td>
				<td width="20%"><input name="cep" type = "text" size = "15"> </td>
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
				<td width="38%"><input name="fone" type = "text" size = "30"></td>
				<td width = "8%"> CPF:</td>
				<td width="20%"><input name="cpf" type = "text" size = "15"> </td>
			</tr>
			
			<tr>
				<td> Email:</td>
				<td colspan="5"><input name="email" type = "text" size = "68"></td>				
			</tr>
			<tr>
				<td> Sexo:</td>	
				<td colspan="5"><input name="sexo" type = "radio" value = "M"> Masculino
				<input name="sexo" type = "radio" value = "F"> Feminino</td>				
			</tr>
			<tr>
				
				<td colspan="6" align="center">	
				<input name="enviar" type = "submit" value = "Salvar"> 
				<input name="cancelar" type = "reset" value = "cancelar"> 
				</td>				
			</tr>
			
		</table>
		</form>	
	
	</td>
</tr>


</table>
</body>
</html>