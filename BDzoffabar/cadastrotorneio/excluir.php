<?php

if (!empty($_GET['id'])) {
$id=$_GET['id'];
include ('../config/conecta.php');
$sql=$conn->prepare("DELETE FROM tb_cadastrotorneio WHERE id_cadastroTorneio= :id");
$sql->bindParam(':id',$id);
$sql->execute();
}
header('location:cadastrotorneio.php');
?>
