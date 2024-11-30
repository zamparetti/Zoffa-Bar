<?php
include ('../config/conecta.php');
$id_fiados=$_POST['id_fiados'];
$nm_pessoa=$_POST['nm_pessoa'];
$preco_fiados=$_POST['preco_fiados'];
$descricao_fiados=$_POST['descricao_fiados'];

$sql=$conn->prepare("UPDATE tb_fiados SET nm_pessoa= :nm_pessoa, preco_fiados= :preco_fiados, descricao_fiados= :descricao_fiados
WHERE id_fiados= :id_fiados");
$sql->bindParam(':nm_pessoa',$nm_pessoa);
$sql->bindParam(':preco_fiados',$preco_fiados);
$sql->bindParam(':descricao_fiados',$descricao_fiados);
$sql->bindParam(':id_fiados', $id_fiados);
$sql->execute();
header('location:fiados.php');


?>