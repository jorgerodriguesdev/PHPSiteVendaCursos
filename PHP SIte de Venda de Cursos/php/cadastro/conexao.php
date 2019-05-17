<?php
$host= "localhost";
$usuario = "root";
$senha = "";
$banco = mysql_connect($host,$usuario,$senha) or die("Não foi possível fazer a conexão com servidor de banco de dados");
mysql_select_db("aulaphp",$banco) or die ("Não foi possível encontrar o banco de dados especificado")

?>