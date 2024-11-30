<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Adicionar Jogador</title>
</head>
<body>

<style>
    /* Estilização para o link "Voltar para a página" */
    a {
        text-decoration: none;
        color: white;
        background-color: #6B0504;
        position: absolute;
        left: 30px;
        top: 150px;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-family: Arial, sans-serif;
        transition: background-color 0.3s, transform 0.2s;
        display: inline-block;
    }

    a:hover {
        background-color: #9B0504;
        transform: scale(1.05);
    }

    a:active {
        background-color: #004085;
        transform: scale(0.98);
    }

    /* Estilização do formulário */
    form {
        margin-top: 20px;
        text-align: left;
        font-family: Arial, sans-serif;
        position: absolute;
        left:30px
    }

    form label {
        font-size: 30px;
        padding-bottom: 10px;
        color: #6B0504;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    form input[type="text"] {
        padding: 10px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 20px;
        outline: none;
        transition: border-color 0.3s;
    }

    form input[type="text"]:focus {
        border-color: red;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    form input[type="submit"] {
        padding: 10px 20px;
        background-color: #6B0504;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    form input[type="submit"]:hover {
        background-color: #9B0504;
        transform: scale(1.05);
    }

    form input[type="submit"]:active {
        background-color: #1e7e34;
        transform: scale(0.98);
    }
</style>

<a href="cadastrotorneio.php">Voltar para a página</a>
    <form action="adicionar_submit.php" method="post">
        <label for="">ADICIONAR NOVO JOGADOR MANUALMENTE:</label>
        <input type="text" name="nm_cadastroTorneio" placeholder="Nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>