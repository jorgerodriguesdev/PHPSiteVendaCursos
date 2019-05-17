<?php
$host 		= "localhost";
$usuario 	= "root";
$senha		= "";
$con		= mysql_connect($host, $usuario, $senha) or die ("não foi possível fazer a conexão");
mysql_select_db("controle_vendas",$con) or die ("não foi possível conectar com o banco de dados");


?>