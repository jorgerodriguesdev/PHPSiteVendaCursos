<?php include "conexao.php"; 

$opcao		= $_GET["opcao"];
$codigo		= $_GET["codigo"];

$nome 		= $_GET["nome"];
$endereco 	= $_GET["endereco"];
$bairro 	= $_GET["bairro"];
$complemento= $_GET["complemento"];
$cidade 	= $_GET["cidade"];
$uf 		= $_GET["uf"];
$cep 		= $_GET["cep"];
$fone 		= $_GET["fone"];
$email 		= $_GET["email"];
$sexo 		= $_GET["sexo"];
$apelido 	= $_GET["apelido"];


if ($opcao == "Excluir")
{
	$sql ="delete from cliente where id_cliente = '$codigo'";
	print $sql;
	mysql_query($sql) or die ("não foi possível excluir");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
elseif ($opcao =="Alterar") 
{
	$sql = "
	UPDATE cliente SET
	nome		= '$nome', 		
	endereco	= '$endereco', 	
	bairro 		= '$bairro', 	
	complemento = '$complemento',
	cidade 		= '$cidade', 		
	uf 			= '$uf', 		
	fone 		= '$fone', 		
	cep 		= '$cep', 		
	email 		= '$email', 		
	sexo 		= '$sexo', 		
	apelido 	= '$apelido'
	WHERE id_cliente = '$codigo' ";
	
	mysql_query ($sql) or die ("não foi possível fazer a alteração");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
else
{
	$sql= "
		INSERT INTO cliente(
		nome,endereco, bairro, complemento, cidade, uf, cep, fone, email, sexo, apelido)
		VALUES(
	'$nome','$endereco', '$bairro', '$complemento', '$cidade', '$uf', '$cep', '$fone', '$email', '$sexo', '$apelido') ";
	
	mysql_query ($sql) or die ("não foi possível incluir");
	
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}

?>
