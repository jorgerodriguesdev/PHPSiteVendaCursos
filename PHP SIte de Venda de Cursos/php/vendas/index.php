<? include ("conexao.php"); ?>

<html>
<head>
<title> Controle de Alunos - mmjailton.com.br </title>
</head>
<body>
<table width = "763" heigth = "100" border = "1" align = "center" cellpadding = "0" cellspacing ="0" bordercolor = "#FF0000" >
<tr >
<td colspan = "2"> <img src = "imagens/logo.gif" </td>

</tr>
<tr>
<td width = 20%> 
	<table width = "100%" align = "center" cellspacing = "0" cellpadding = "0" bgcolor = "#993333" >
	<tr><td bgcolor = "990000" align = "center"> <font color = "#FFFFFF"> CADASTRO </font></td></tr>
	<tr> <td bgcolor = "#FFB3B3"><a href= "index.php?link=2"> Clientes </a></td></tr>
	<tr> <td bgcolor = "#FFB3B3"><a href= "index.php?link=6"> Curso </a></td></tr>
	<tr> <td bgcolor = "#FFB3B3"><a href= "index.php?link=9"> Vendas </a></td></tr>
	<tr><td bgcolor = "990000" align = "center"> <font color = "#FFFFFF"> CURSOS </font></td></tr>
	<tr><td bgcolor = "#FFB3B3">
	<?php
		$sql = "select * from curso order by curso";
		$query = mysql_query($sql);
		
		while ($resultado=mysql_fetch_array($query))
		{
			if (!empty ($_GET[cur]) and $resultado[id_curso]==$_GET[cur]){
			print "<tr> <td bgcolor =  #FFB3B3><a href=index.php?cur=$resultado[id_curso]&link=12>$resultado[curso]<img src=imagens/seta2.gif></a></td></tr>";
		}
		else
		{
		print "<tr> <td bgcolor =  #FFB3B3><a href=index.php?cur=$resultado[id_curso]&link=12>$resultado[curso]</a></td></tr>";
		}
		}
	?>
	</tr>
	</table>
</td> 
<td> 
	<table width = 100% border ="0" cellspacing = "0" cellpading = "0">
	<tr>
		<td>
			<?php
				$link = $_GET["link"];
				
				$pag[1] = "home.php";
				$pag[2] = "formcliente.php";
				$pag[3] = "consultacliente.php";
				$pag[4] = "sucesso.php";
				$pag[5] = "vercliente.php";
				$pag[6] = "formcurso.php";
				$pag[7] = "consultacurso.php";
				$pag[8] = "vercurso.php";
				$pag[9] = "formvenda.php";
				$pag[10] = "consultavenda.php";
				$pag[11] = "vervenda.php";
				$pag[12] = "vendas_cursos.php";
				if (!empty($link))
				{
					if (file_exists($pag[$link]))
					{
						include $pag[$link];
					}
					else
					{
						print "a pagina não foi localizada";
					}
				
				}
			?>
		<td>
	</tr>
	</table>
</td>
</tr>

</body>
</html>