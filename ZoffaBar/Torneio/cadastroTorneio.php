<?php
    include('../Login/acesso.php');

?><

!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoffa Bar</title>
    
    <!-- Links para o CSS e outros recursos -->
    <link rel="stylesheet" href="estilo1.css">
    <link rel="shortcut icon" href="../imagen/logochop.jpg" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<?php
include('../../BDzoffabar/config/conecta.php');

$sql=$conn->prepare("SELECT c.*,ca.* FROM tb_cadastrotorneio c LEFT JOIN tb_cadastroconfirmar ca 
ON ca.id_cadastroConfirmar=c.cadastroconfirmar_id where c.id_cadastroTorneio LIMIT 30");
$sql->execute();

$result=$sql->fetchAll();

?>
<body>

    <!-- Cabeçalho -->
    <header>
        <nav>
            <ul>
                <li id="logo">ZoffaBar<span class="heart-icon">🍺</span></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Inicio/INDEX2.php">Início</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Regras/PAG_SERVICOS.php">Regras-Torneio</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Torneio/cadastroTorneio.php">Torneio</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Sobre/sobre.php">Sobre</a></li>
                <li><a href="http://localhost/PetCareAll/Petcare/login/logout.php" class="desconectar">Desconectar conta</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção Principal -->
    <main>
    <section id="intro">
        <h1>Se cadastre no torneio 🏆</h1>
    </section>
    <div id="texto">
    <form action="cadastro_adicionar_submit.php" method="post">

        <div class="input-box">
            <input type="text" name="nm_cadastroTorneio" id="nm_cadastroTorneio" placeholder="Digite seu nome" required>
            <i class='bx bxs-user'></i>
        </div>

        <?php
        include('../../BDzoffabar/config/conecta.php');
        $sql_cadastroConfirmar = $conn->prepare("SELECT * FROM tb_cadastroconfirmar");
        $sql_cadastroConfirmar->execute();
        $result_cadastroConfirmar = $sql_cadastroConfirmar->fetchAll();
        ?>
        <select name="cadastroconfirmar_id" id="cadastroconfirmar_id">
            <option value="" selected> Presença</option>
            <?php foreach ($result_cadastroConfirmar as $data) { ?>
                <option value="<?php echo $data['id_cadastroConfirmar'] ?>"> <?php echo $data['presenca_cadastroConfirmar'] ?> </option> 
            <?php } ?>
        </select>
        <h1 class="confirme">Confirme no ‎ ✓</h1>

        <button type="submit" class="btn">Cadastrar</button>

    </form>
</div>

            
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <div id="caixafooter"></div>
        <p>Desenvolvido por Lucas Zamparetti</p>
    </footer>

</body>

</html>
