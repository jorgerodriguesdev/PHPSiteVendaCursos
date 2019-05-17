<?php
include ("validarcookie.php");
?>
<html>
<head>
<title> Curso Completo de PHP Aluno Jorge - www.mjailton.com.br
<body>
<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
<tr>
<td>
	<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
	<tr> 
		<td colspan="2"><img src = "fd.gif"></td>
	</tr>
	<tr> 
		<td width=20%>		
		<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
			<tr> <td>Menu de Opções </td></tr>
			<tr> <td><a href="index.php?link=1"> home</a></td></tr>
			<tr> <td><a href="index.php?link=2">Inserir</a></td></tr>
			<tr> <td><a href="index.php?link=3">Alterar </a></td></tr>
			<tr> <td><a href="index.php?link=5">Excluir </a></td></tr>
			<tr> <td><a href="index.php?link=7">Consulta </a></td></tr>
			<tr> <td><a href="logout.php"> Sair </a></td></tr>				
		</table>		
		</td>		
		
		<td>
			<table width = "100%" border = "1" cellspacing = "0" cellpadding = "0">
			<tr><td>
				<?php
				$link=$_GET["link"];
				
				$pag[1]="home.php";
				$pag[2]="formcliente.php";
				$pag[3]="selecionaalterar.php";
				$pag[4]="formeditar.php";
				$pag[5]="selecionaexclur.php";
				$pag[6]="formexcluir.php";
				$pag[7]="consulta.php";				
				
				
				if(!empty($link))
				{
					if (file_exists($pag[$link]))
					{
						include $pag[$link];
					}
					else
					{
						print "a página não foi encontrada";
					}
				
				}
				
				?>




			</td> </tr>
			</table>
		</td>
	</tr>
	</table>

</td>
</tr>
</table>



</body>
</html>