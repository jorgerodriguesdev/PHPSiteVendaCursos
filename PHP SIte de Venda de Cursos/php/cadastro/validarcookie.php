<?php
	//verifica se a variável foi iniciada
	if (IsSet($_COOKIE["nome_usuario"]))
	 $nome_usuario = $_COOKIE["nome_usuario"];
	 
	if (IsSet($_COOKIE["senha_usuario"]))
	 $senha_usuario = $_COOKIE["senha_usuario"];
	 
	 if (!(empty($nome_usuario) or empty($senha_usuario)))
	 {
		include ("conexao.php");
		$sql="select * from login where login = '$nome_usuario' and senha = '$senha_usuario' and ativo = 'S'";	
		
		$query = mysql_query($sql);	
		$linhas = mysql_num_rows($query);
		
		if ($linhas ==0)
		{
			setcookie("nome_usuario");
			setcookie("senha_usuario");
			header("location: login.php");
			exit;		
		}
		
	 }
	 else
	 {
			header("location: login.php");
			exit;	 
	 }

?>