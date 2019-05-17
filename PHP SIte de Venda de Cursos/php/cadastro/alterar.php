<?php
	include ("conexao.php");

$codigo 	= $_POST["codigo"];
$nome 		= $_POST["nome"];
$endereco 	= $_POST["endereco"];
$bairro 	= $_POST["bairro"];
$cidade 	= $_POST["cidade"];
$cep 		= $_POST["cep"];
$uf 		= $_POST["uf"];
$fone 		= $_POST["fone"];
$cpf 		= $_POST["cpf"];
$email 		= $_POST["email"];
$sexo 		= $_POST["sexo"];

	$sql ="
	UPDATE cliente SET 
		nome= '$nome', 
		endereco='$endereco',
		bairro='$bairro', 
		cidade='$cidade', 
		cep='$cep', 
		uf='$uf', 
		fone='$fone', 
		cpf='$cpf', 
		email='$email', 
		sexo='$sexo'
	WHERE id_cliente = '$codigo' 
	
	";
	
	 $query=mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");
	
	header("location:index.php?link=1"); 
	




?>

