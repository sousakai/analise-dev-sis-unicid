<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Desconto</title>
</head>
<body>
    <?php
    $produto = $_POST["produto"];
    $desconto = $_POST["desconto"];
    $valorFinal = $produto - ($produto * ($desconto / 100));

    echo "O seu produto de R$" . $produto . " recebeu um desconto de ". $desconto . ", passando a custar: <br> <h1> R$" . $valorFinal;
    ?>
</body>
</html>