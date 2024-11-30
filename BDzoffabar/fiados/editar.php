<?php
include ('../config/conecta.php');

if (!empty($_GET['id'])   ) {
    $id=$_GET['id'];

    $sql=$conn->prepare("SELECT * FROM tb_fiados WHERE id_fiados=:id LIMIT 1");
    $sql->bindParam(':id',$id);
    $sql->execute();
    $result=$sql->fetch();
  
    ?>

    <form action="editar_submit.php" method="post">
    <label for="">ID</label>

        <input type="text" name="id_fiados" id=""   value="<?php echo $result['id_fiados']?>  " disabled >
        <label for="">Nome de quem está devendo</label>
        <input type="text" name="nm_pessoa" id=""   value="<?php echo $result['nm_pessoa']?>  " >
        <label for="">Preço do fiado</label>
        <input type="text" name="preco_fiados" id=""   value="<?php echo $result['preco_fiados']?>  " >
        <label for="">Descrição</label>
        <input type="text" name="descricao_fiados" id=""   value="<?php echo $result['descricao_fiados']?>  " >
        <input type="hidden" name="id_fiados" id=""   value="<?php echo $result['id_fiados']?>  "  >
        <input type="submit" value="Enviar">
    </form>

    <?php
}




?>