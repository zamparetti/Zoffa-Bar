
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiados</title>
    <link rel="stylesheet" href="estilo1.css">
    <link rel="shortcut icon" href="../imagen/logozinha.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    
</head>

<?php

include ('../config/conecta.php');

$sql=$conn->prepare("SELECT f.* FROM tb_fiados f LIMIT 30 ");
$sql->execute();
$result=$sql->fetchAll();
?>

<body>
<!--Cabeçalho-->
<header>

<a href="adicionar.php" class="novoFiado">Adicionar fiado</a>
        <a href="http://localhost/ZoffaBar/BDzoffabar/cadastrotorneio/cadastrotorneio.php" class="listaConv">Voltar para a lista de confirmados</a>
        
               <form action="" method="post">
         <input type="text" name="busca" id="busca" placeholder="Procure o nome de quem está devendo                 🔍" class="busca">
            <input type="submit" value="Filtrar" hidden>
    </form>
<?php
if(!empty ($_POST['busca'])){
    $buscar="%".$_POST['busca']."%";
    $sql=$conn->prepare("SELECT f.* FROM tb_fiados f  WHERE f.nm_pessoa
    LIKE :buscar");
    $sql->bindParam(':buscar',$buscar);
    $sql-> execute();
    $result=$sql->fetchAll();
   
}

?>
    </header> 




<div class="container-pai">
        <div class="container-carrossel">  </div>

       

   <?php

    foreach($result as $data) { ?>
    <div class="card">

        <p>
        <?php

            

               echo $data['nm_pessoa'];
            
            
        ?>
        </p>

            
        <h2 class="desc">
        <?php

               echo $data['descricao_fiados'];
           
        ?>
        </h2>


        <h2 class="preco">
        <?php

            

                echo "R$ " . $data['preco_fiados'];
               

          
        ?>
        </h2>
        <div class="actions">
            <a href="editar.php?id=<?php echo $data['id_fiados']; ?>">Editar</a>
            <a href="excluir.php?id=<?php echo $data['id_fiados']; ?>" onclick="return confirm('Deseja Excluir?')">Excluir</a>
        </div>
        
    </div>
<?php
    }
    ?>
    </div>
  
</body>
</html>
