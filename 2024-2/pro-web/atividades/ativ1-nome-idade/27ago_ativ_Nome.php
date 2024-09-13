<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Saudação </title>
</head>
<body>
    <?php
    $idade = $_POST["idade"];
    $nome = $_POST["nome"];

    echo "Olá, " . $nome . ". Você possui " . $idade . " anos de idade. Parabéns!"
    ?>
</body>
</html>