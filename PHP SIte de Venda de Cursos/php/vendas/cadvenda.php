<? include "biblio.fcn"; ?>

<?php 
include "conexao.php"; 

$opcao		= $_GET["opcao"];
$codigo		= $_GET["codigo"];

$id_cliente 		= $_GET["id_cliente"];
$id_curso 			= $_GET["id_curso"];
$data_venda 		= databr($_GET["data_venda"],1);
$data_envio 		= databr($_GET["data_envio"],1);
$codigo_rastreamento= $_GET["codigo_rastreamento"];
$valor_pago			= $_GET["valor_pago"];
$tipo_entrega		= $_GET["tipo_entrega"];
$tipo_pagamento 	= $_GET["tipo_pagamento"];
$pago 				= $_GET["pago"];
$enviado 			= $_GET["enviado"];
$recebido 			= $_GET["recebido"];


if ($opcao == "Excluir")
{
	$sql ="delete from vendas where id_venda = '$codigo'";
	//print $sql;
	mysql_query($sql) or die ("não foi possível excluir");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
elseif ($opcao =="Alterar") 
{
	$sql = "
	UPDATE vendas SET 
		id_cliente			='$id_cliente', 
		id_curso			='$id_curso',
		data_venda			= '$data_venda', 
		data_envio			='$data_envio', 
		codigo_rastreamento	='$codigo_rastreamento', 
		valor_pago			='$valor_pago', 
		tipo_entrega		='$tipo_entraga', 
		tipo_pagamento		='$tipo_pagamento', 
		pago				='$pago', 
		enviado				='$enviado',
		recebido			='$recebido'
	WHERE id_venda 			='$codigo' ";
	//print $sql;
	mysql_query ($sql) or die ("não foi possível fazer a alteração");
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}
else
{
	$sql= "
		INSERT INTO vendas(
			id_cliente, id_curso, data_venda, data_envio, codigo_rastreamento, valor_pago, tipo_entrega, tipo_pagamento
			, pago, enviado, recebido)
		VALUES(
			'$id_cliente', '$id_curso', '$data_venda', '$data_envio', '$codigo_rastreamento', '$valor_pago', '$tipo_entrega', 	'$tipo_pagamento', '$pago', '$enviado', '$recebido') ";
	print $sql;
	mysql_query ($sql) or die ("não foi possível incluir");
	
	print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
}

?>
