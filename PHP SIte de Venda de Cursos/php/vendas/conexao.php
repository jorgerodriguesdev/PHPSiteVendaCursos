<?php
$host 		= "localhost";
$usuario 	= "root";
$senha		= "";
$con		= mysql_connect($host, $usuario, $senha) or die ("n�o foi poss�vel fazer a conex�o");
mysql_select_db("controle_vendas",$con) or die ("n�o foi poss�vel conectar com o banco de dados");


?>