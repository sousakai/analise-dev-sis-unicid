<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Final (SWITCH) </title>
</head>
<body>
    <?php
        $valor = $_POST['valor'];
        $conversao = $_POST['conversao'];
        $resultado = 0;
        switch($conversao){
            case "cel/fah":
                $resultado = ($valor * 1.8) + 32;
                break;
                case "fah/cel": 
                    $resultado = ($valor - 32) * 5/9;
                    break;
        }
        echo "A conversão do valor $valor, de fórmula $conversao possui o resultado de $resultado.";
    ?>
</body>
</html>