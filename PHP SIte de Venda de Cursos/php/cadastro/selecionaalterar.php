<? include ("conexao.php");?>
<html>
<head>
<title> Curso Completo de PHP Aluno Jorge - www.mjailton.com.br </title>
</head>
<body>
	<form name="alterar" method = "post" action ="index.php?link=4">
	 selecione um nome:
	 <select name = "selecao" size "1" id="selecao" >

<?php
		$sql= "SELECT nome FROM cliente order by nome";
		$resultado = mysql_query($sql) or die ("não foi possível realizar a consulta, verifique a conexão");
		
		While($registro=mysql_fetch_array($resultado))
    	{ 
	?>
              <option >
              <?=$registro["nome"]?>
              </option>
              <?php 
 }
		mysql_free_result($resultado);
	 ?> 
	 
	 </select>
	<input name="ok" type = "submit" value = "OK">
	</form>
</body>
</html>