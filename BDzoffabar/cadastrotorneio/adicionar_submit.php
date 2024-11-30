<?php
$nm_cadastroTorneio = $_POST['nm_cadastroTorneio'];
include('../config/conecta.php');
$sql = $conn->prepare("INSERT INTO tb_cadastrotorneio (nm_cadastroTorneio) VALUES (:nm_cadastroTorneio)");
$sql->bindValue(':nm_cadastroTorneio', $nm_cadastroTorneio);
$sql->execute();

header('location:cadastrotorneio.php');
?>
