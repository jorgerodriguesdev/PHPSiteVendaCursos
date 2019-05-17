<?php include("conexao.php");?>
<html>
<head>
<title> Curso Completo de PHP - www.mjailton.com.br </title>
</head>
<body>
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
	<tr>
		<form name = "consulta" method="post" action ="">
		<td>
		digite o valor:<input name= "cliente" type = "text" id="cliente"> 
		<input name = "consultar" type = "submit" value= "consultar">	
		
	</td>
	</form>	
	</tr>
		<tr>
		<td>
		<table width = "100%" border = "0" cellspacing = "0" cellpadding = "0">
			<tr bgcolor = "#0033FF" >
				<td><font color = "#FFFFFF"> Nome </font></td>
				<td> <font color = "#FFFFFF">Endereço</font></td>
				<td> <font color = "#FFFFFF">Telefone</font></td>
				<td> <font color = "#FFFFFF">Email</font></td>
				
			</tr>
			<?php 
				$cliente = $_POST["cliente"];
				
				$sql= "select * from cliente where nome like '%$cliente%' order by nome";
				$query =  mysql_query($sql);
				
				while($resultado = mysql_fetch_array($query))
				{
					if ($bgcolor=="#FFFFCC") 
						$bgcolor="#FFFFFF";
					else 
						$bgcolor="#FFFFCC";	
					print "
						<tr bgcolor = '#FFFFCC'>
						<td bgcolor = \"$bgcolor\"> $resultado[nome] </td>
						<td bgcolor = \"$bgcolor\"> $resultado[endereco] </td>
						<td bgcolor = \"$bgcolor\"> $resultado[fone] </td>						
						<td bgcolor = \"$bgcolor\"> $resultado[email] </td>
						
						</tr>";
				}
			?>
		</table>
		</td>
	</tr>
	


</table>



</body>
</html>