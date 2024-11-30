<?php 
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acesso Negado</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMMyE93bNcuO2oZ3oWmr4V/U5z6W1uEC1Ecg7v3" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f2f2f2;
                background: url("imagens/fundoLogin.png") no-repeat;
            }
            .container {
                width: 420px;
                text-align: center;
                background: rgba(255, 255, 255, 0.2);
                padding: 50px;
                border-radius: 20px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(10px);
            }
            h1 {
                color: #ff0000;
                font-size: 36px;
                letter-spacing: 2px;
                text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #007bff;
                font-size: 18px;
                letter-spacing: 1px;
                transition: color 0.3s ease;
            }
            a:hover {
                color: #4634d8;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1><i class="fas fa-exclamation-triangle"></i> Acesso Negado!</h1>
            <a href="http://localhost/ZoffaBar/ZoffaBar/Login/login.php">Voltar para a página de login</a>
        </div>
    </body>
    </html>';
    exit();
}
?>
