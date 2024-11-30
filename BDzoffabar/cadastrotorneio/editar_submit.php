<?php
include ('../config/conecta.php');
$id_cadastroTorneio=$_POST['id_cadastroTorneio'];
$nm_cadastroTorneio=$_POST['nm_cadastroTorneio'];

$sql=$conn->prepare("UPDATE tb_cadastrotorneio SET nm_cadastroTorneio= :nm_cadastroTorneio 
WHERE id_cadastroTorneio= :id_cadastroTorneio");
$sql->bindParam(':nm_cadastroTorneio',$nm_cadastroTorneio);
$sql->bindParam(':id_cadastroTorneio', $id_cadastroTorneio);
$sql->execute();
header('location:cadastrotorneio.php');


?>