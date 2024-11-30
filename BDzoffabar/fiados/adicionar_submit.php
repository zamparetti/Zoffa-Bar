<?php
$nm_pessoa = $_POST['nm_pessoa'];
$preco_fiados = $_POST['preco_fiados'];
$descricao_fiados = $_POST['descricao_fiados'];
include('../config/conecta.php');
$sql = $conn->prepare("INSERT INTO tb_fiados (nm_pessoa, preco_fiados, descricao_fiados) VALUES (:nm_pessoa, :preco_fiados, :descricao_fiados)");
$sql->bindValue(':nm_pessoa', $nm_pessoa);
$sql->bindValue(':preco_fiados', $preco_fiados);
$sql->bindValue(':descricao_fiados', $descricao_fiados);
$sql->execute();

header('location:fiados.php');
?>
