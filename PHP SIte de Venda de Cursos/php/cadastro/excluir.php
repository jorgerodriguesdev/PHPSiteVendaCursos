<?php
	include ("conexao.php");

$codigo 	= $_POST["codigo"];


	$sql =" DELETE FROM cliente WHERE id_cliente = '$codigo' ";
	
	 $query=mysql_query($sql) or die("Houve um erro na grava��o dos dados, verifique os valores passados");
	
	header("location:index.php?link=1");
	




?>

