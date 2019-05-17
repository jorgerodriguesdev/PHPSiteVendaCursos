<?php include ("conexao.php");

$login = $_POST["login"];
$senha = $_POST["senha"];

	$sql="select * from login where login = '$login' and senha = '$senha' and ativo = 'S'"; 
	$query = mysql_query($sql);
	
	$linhas = mysql_num_rows($query);
	
	if ($linhas ==0)
	{
		print "<html><body>";
		print "<p align=\"center\"> usuário não encontrado! </p>";
		print "<p align=\"center\"> <a href = \"login.php\"> voltar </a></p>";
		print "</html></body>";
	}
	else
	{
		setcookie("nome_usuario", $login);		
		setcookie("senha_usuario",$senha);		
		header("location: index.php?link=1");
	}


?>
