<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ. Calculadora 26.08 </title>
</head>
<body>
    <?php
    $operador = $_POST["operador"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    if ($operador == "adi") {
        $valor = $n1 + $n2;
        echo "<h3> A soma de: $n1 e $n2 equivale a: $valor. </h3>";
       } else if ($operador == "sub") {
        $valor = $n1 - $n2;
        echo "<h3> A subtração de $n1 e $n2 equivale a : $valor. </h3>";
       } else if ($operador == "div") {
        $valor = $n1 / $n2;
        echo "<h3> A divisão de $n1 e $n2 equivale a : $valor. </h3>";
       } else if ($operador == "mul") {
        $valor = $n1 * $n2;
        echo "<h3> A multiplicação de $n1 e $n2 equivale a : $valor. </h3>";
       }
    ?>
</body>
</html>