<?php include "conexao.php"; 

$opcao		= $_GET["opcao"];
$codigo		= $_GET["codigo"];

$curso 		= $_GET["curso"];
$valor	 	= $_GET["valor"];



if ($opcao == "Excluir")
{
	$sql ="delete from curso where id_curso = '$codigo'";
	print $sql;
	mysql_query($sql) or die ("n�o foi poss�vel excluir");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
elseif ($opcao =="Alterar") 
{
	$sql = "
	UPDATE curso SET
	curso		= '$curso', 		
	valor		= '$valor' 	

	WHERE id_curso = '$codigo' ";
	print $sql;
	mysql_query ($sql) or die ("n�o foi poss�vel fazer a altera��o");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
else
{
	$sql= "
		INSERT INTO curso(
		curso,valor )
		VALUES(
	'$curso','$valor') ";
	
	mysql_query ($sql) or die ("n�o foi poss�vel incluir");
	
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}

?>
