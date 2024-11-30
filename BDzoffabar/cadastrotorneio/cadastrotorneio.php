<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRADOS NO TORNEIO</title>
</head>
<?php
include ('../config/conecta.php');


$sql=$conn->prepare("SELECT * FROM tb_cadastroTorneio LIMIT 30");
$sql->execute();
 
$result=$sql->fetchAll();

?>
<body>

<style>
 
 body{
  font-family: Arial, sans-serif;
 }
    

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #6B0504;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .listaConv {
            position: absolute;
            top: 3%;
            left: 65%;
            padding: 10px 5px;

    }

    a {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        background-color: #6B0504;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
        text-align: center;
        cursor: pointer;
    }

    a[href*="editar"] {
        background-color: #28a745;
        text-decoration: none;
        padding: 8px 12px;
        color: black;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    a[href*="excluir"] {
        background-color: #dc3545;
        text-decoration: none;
        padding: 8px 12px;
        color: black;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    a:hover {
        opacity: 0.9;
    }

    form {
       
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin: 20px 0;
    }

    input[type="text"] {
        padding: 10px;
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: #333;
        outline: none;
        transition: border-color 0.3s;
        position: absolute;
        right: 43%;
    }

    input[type="text"]:focus {
        border-color: red;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        position: absolute;
        right: 33.5%;
        background-color: #6B0504;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    input[type="submit"]:hover {
        background-color: #9b0501;
        transform: scale(1.05);
    }

    h1 {
        text-align: left;
        font-size: 2em;
        color: #6B0504;
        margin-bottom: 5%;
        font-family: Arial, sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    h1::after {
        content: "";
        display: block;
        position: absolute;
        left: 15%;
        width: 300px;
        height: 4px;
        background-color: #6B0504;
        margin: 10px auto 0;
    }

</style>


<form action="" method="post">
<h1>PESSOAS CADASTRADAS NO TORNEIO</h1><br><br>
<a href="http://localhost/ZoffaBar/BDzoffabar/fiados/fiados.php" class="listaConv">Ir ao gerênciamento de fiados</a>
<a href="adicionar.php" class="novaPessoa">Adicionar pessoa manualmente</a>
 <input type="text" name="busca" id="busca" placeholder="Nome">
 <input type="submit" value="Procurar">
 
<table class="table table-bordered">
</form>



<?php
if (!empty($_POST['busca'])) {
$buscar="%".$_POST['busca']."%";
$sql=$conn->prepare("SELECT * FROM tb_cadastrotorneio WHERE nm_cadastroTorneio
LIKE :buscar");
$sql->bindParam(':buscar',$buscar);
$sql->execute();
$result=$sql->fetchAll();
}
?>

<br> 

    <table border="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th colspan="3">Ações</th>
          </tr>
        </thead>
        <tbody>
    

           <?php 
        foreach($result as $linha) {
        echo "<tr>";
        echo "<td>".$linha['id_cadastroTorneio']."</td>";
        echo "<td>".$linha['nm_cadastroTorneio']."</td>";
        ?>
        <td> <a href="editar.php?id=<?php echo $linha['id_cadastroTorneio']?>">Editar</a>  </td>
        <td> <a href="excluir.php?id=<?php echo $linha['id_cadastroTorneio']?>" onclick="return confirm('Deseja Excluir?')" >Excluir</a>  </td>
       <?php
       
     
        echo "</tr>";
        }

        ?>
        </tbody>
    </table>
    
</body>
</html>