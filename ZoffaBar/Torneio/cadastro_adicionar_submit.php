<?php
include('../../BDzoffabar/config/conecta.php');

    include('../Login/acesso.php');

if (isset($_POST['nm_cadastroTorneio']) && isset($_POST['cadastroconfirmar_id'])) {
    $nm_cadastroTorneio = $_POST['nm_cadastroTorneio'];
    $cadastroconfirmar_id = $_POST['cadastroconfirmar_id'];

    $sqlCadastro = $conn->prepare("SELECT * FROM tb_cadastroTorneio WHERE nm_cadastroTorneio = :nome LIMIT 1");
    $sqlCadastro->bindParam(':nome', $nm_cadastroTorneio);
    $sqlCadastro->execute();

    if ($sqlCadastro->rowCount() > 0) {
        ?>
        <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Já Usado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #6B0504;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 16px;
        }

        .container {
            background-color: white;
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #6B0504; /* Cor para o título de erro */
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .button {
            background-color: #6B0504;
            color: #fff;
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }

        .button:hover {
            background-color: #c9302c;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .button {
                width: 100%;
                font-size: 18px;
                
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Erro</h1>
        <p>Este nome já foi usado. Por favor, escolha outro.</p>
            <a href="cadastroTorneio.php" class="button">Voltar ao cadastro</a>
    </div>
</body>
</html>

       
        <?php
    } else {
        // Inserir o novo cadastro
        $sql = $conn->prepare("INSERT INTO tb_cadastroTorneio (nm_cadastroTorneio, cadastroconfirmar_id) VALUES (:nm_cadastroTorneio, :cadastroconfirmar_id)");

        $sql->bindParam(':nm_cadastroTorneio', $nm_cadastroTorneio);
        $sql->bindParam(':cadastroconfirmar_id', $cadastroconfirmar_id);

        if ($sql->execute()) {
            header('Location: ../Inicio/INDEX2.php'); 
        } else {
            echo "Erro ao cadastrar.";
        }
    }
} else {
    echo "Dados não recebidos.";
}
?>
