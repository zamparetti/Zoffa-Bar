<?php
    include('../Login/acesso.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoffa Bar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../imagen/logochop.jpg" type="image/x-icon">

    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<!--Cabeçalho-->
<header>
<nav>
<li id="logo">
        ZoffaBar<span class="heart-icon">🍺</span>
        </li>
        
    <ul type="none">
        
                <li><a href="#" >início</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Regras/PAG_SERVICOS.php ">Regras-Torneio</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Torneio/cadastroTorneio.php">Torneio</a></li>
                <li><a href="http://localhost/ZoffaBar/ZoffaBar/Sobre/sobre.php">Sobre</a></li>
                <li><a href="http://localhost/PetCareAll/Petcare/login/logout.php" class="desconectar">Desconectar conta</a></li>
    </ul>
</nav>
</header>
<!--Corpo do site-->
<main>
    <section id="intro">
        <h1>🍹</h1>
    </section>
    <div id="caoegato">
        <div id="box1"></div>
        <div id="box2"></div>
    </div>
    <div id="texto">
        <h1>O ZoffaBar, mais conhecido como Bar do Inho, é o ponto de encontro ideal para 
            quem gosta de diversão e boa companhia. No local, os frequentadores podem participar 
            de emocionantes torneios de sinuca, que acontecem regularmente e atraem a galera animada.
             Além disso, o bar oferece uma excelente variedade de bebidas geladas e, para completar, o 
             tradicional churrasco preparado com todo o cuidado. O ambiente descontraído e acolhedor faz
              do ZoffaBar um lugar perfeito para relaxar e socializar.</h1>
    </div>
    
    <div id="pai">
        <div id="box3"> 
        <img src="imagen/zfotobar1.jpeg" alt="">        
    </div>
        <div id="box4">
        <img src="imagen/zfotobar2.jpeg" alt="">  
        </div>
        <div id="box5">
        <img src="imagen/zfotobar6.jpeg" alt="">  
        </div>
    </div>
</main>
<!--Rodapé-->
<div id="caixafooter"></div>
<footer>
    <p>Desenvolvido por Lucas Zamparetti</p>
</footer>
</body>
</html>
