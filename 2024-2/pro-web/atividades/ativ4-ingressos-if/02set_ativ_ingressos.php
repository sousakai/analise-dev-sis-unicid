<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Ingressos </title>
</head>
<body>
    <fieldset>
        <form action="2set_ativ_ingressos.php" method="POST" id="formIdade">
        <label for="formIdade"> Digite a idade do comprador do ingresso: </label>
        <br>
        <input type="number" min="0" max="120" placeholder="Insira a idade" name="idade">
        <input type="submit" value="Enviar">
        </form>
    </fieldset>
    <?php
    $idade = $_POST["idade"];
    if($idade <15){
        echo "A idade do comprador ($idade) é menor que 15 anos.";
    } else {
        echo "A idade do comprador ($idade) é maior que 15 anos.";
    }
    ?>
</body>
</html>