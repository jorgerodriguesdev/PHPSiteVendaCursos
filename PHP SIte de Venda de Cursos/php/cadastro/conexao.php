<?php
$host= "localhost";
$usuario = "root";
$senha = "";
$banco = mysql_connect($host,$usuario,$senha) or die("N�o foi poss�vel fazer a conex�o com servidor de banco de dados");
mysql_select_db("aulaphp",$banco) or die ("N�o foi poss�vel encontrar o banco de dados especificado")

?>