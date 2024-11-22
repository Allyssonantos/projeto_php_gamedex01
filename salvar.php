<?php include('db_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nome do Jogo:</label><input type="text" name="nomejogo" required><br>

        <label for="">Gênero: </label><input type="text" name="genero" required><br>

        <label for="">Desenvolvedor: </label><input type="text" name="desenvolvedor" required><br>

        <label for="">Ano:</label><input type="number" name="ano" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomejogo = $_POST["nomejogo"];
        $genero = $_POST["genero"];
        $desenvolvedor = $_POST["desenvolvedor"];
        $ano = $_POST["ano"];
        
        $sql = "INSERT INTO jogos (nomejogo, genero, desenvolvedor, ano) VALUES ('$nomejogo', '$genero', '$desenvolvedor', $ano)";

    }
    ?>
    </body>
</body>
</html>