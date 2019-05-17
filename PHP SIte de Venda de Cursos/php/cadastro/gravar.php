<?php
	include ("conexao.php");

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

$cripto= md5($nome);

	$sql ="
	INSERT INTO cliente(
	nome, endereco, bairro, cidade, cep, uf, fone, cpf, email, sexo)
	VALUES(
	'$cripto', '$endereco', '$bairro', '$cidade', '$cep', '$uf', '$fone', '$cpf', '$email', '$sexo')";
	
	 $query=mysql_query($sql) or die("Houve um erro na gravação dos dados, verifique os valores passados");
	
	header("location:index.php?link=1"); 
	




?>

