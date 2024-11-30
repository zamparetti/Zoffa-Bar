
<?php   

include('../../BDzoffabar/config/conecta.php');
if(isset($_POST['login']) || isset($_POST['senha']) ) {
    if(strlen($_POST['login'])==0) {
        echo"Preencha o seu login";
    } else if (strlen($_POST['senha'])==0){
        echo"Preencha sua senha";
    } else {
        $login=$_POST['login'];
        $senha=$_POST['senha'];

        $sql=$conn->prepare("SELECT * FROM tb_usuario WHERE login_usuario= :login AND senha_usuario= :senha LIMIT 1");
        
        $sql->bindParam(':login', $login);
        $sql->bindParam(':senha', $senha);
                $sql->execute();

        if($sql->rowCount()>0){
            $usuario=$sql->fetch();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['login']=$usuario['login_usuario'];
            $_SESSION['senha']=$usuario['senha_usuario'];
            $_SESSION['id_usuario']=$usuario['id_usuario'];
            $_SESSION['nm_usuario']=$usuario['nm_usuario'];
            $_SESSION['email_usuario']=$usuario['email_usuario'];
           
            header('location: ../Inicio/INDEX2.php');
        } else{
            ?><p class="error"><?php
            echo "ERRO AO LOGAR, TENTE NOVAMENTE!";
            ?>
            </p>
            <?php
        }

        
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   


   
    <div class="wrapper">

        <div class="navbar">
            <a href="#">← Voltar</a>
            <div class="logo">
               ZoffaBar<span class="heart-icon">🍺</span>
            </div>
        </div>

        <form action="" method="post">

            <h1>Bem-vindo!  🥂</h1>
            <div class="input-box">
                <input type="text" name="login" id="login"  placeholder=" Usuário" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="Email do Usuário" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

        

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Não tem conta? <a href="http://localhost/ZoffaBar/ZoffaBar/Login/acesso_adicionar.php">Registrar</a></p>
            </div>



        </form>


    </div>
    
</body>
</html>