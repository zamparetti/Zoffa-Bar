<?php
include ('../config/conecta.php');

if (!empty($_GET['id'])   ) {
    $id=$_GET['id'];

    $sql=$conn->prepare("SELECT * FROM tb_cadastrotorneio WHERE id_cadastroTorneio=:id LIMIT 1");
    $sql->bindParam(':id',$id);
    $sql->execute();
    $result=$sql->fetch();
  
    ?>

    <form action="editar_submit.php" method="post">
    <label for="">ID</label>

        <input type="text" name="id_cadastroTorneio" id=""   value="<?php echo $result['id_cadastroTorneio']?>  " disabled >
        <label for="">Nome</label>
        <input type="text" name="nm_cadastroTorneio" id=""   value="<?php echo $result['nm_cadastroTorneio']?>  " >
        <input type="hidden" name="id_cadastroTorneio" id=""   value="<?php echo $result['id_cadastroTorneio']?>  "  >
        <input type="submit" value="Enviar">
    </form>

    <?php
}




?>