<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO FATORIAL</title>
    <style>
        .fatorial{
            text-align: center;
            padding: 30px;
            margin: 50px;
            align-self: center;
            background-color: whitesmoke;
        }
        body{
            background: radial-gradient(circle, rgba(73,9,9,1) 0%, rgba(42,17,17,1) 35%);
        }
        #resultado{
            font-size: 27px;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
    <fieldset class="fatorial">
<?php
    $numero = $_GET["numero"]; // Número a ser calculado
    $resultado = 1; // Inicia-se em 1, para evitar que dê resultado 0 no fim (todo número por 0, equivale a 0).

    for ($i = 1; $i <= $numero; $i++) {  
        $resultado *= $i;

         //Multiplica o valor 1 pelo contador. O contador é incrementado até atingir o número que demos a ele (9). A variável (pelo *=) multiplica e guarda esse valor, multiplicando novamente no próximo laço. 
    }

    echo "<label id='resultado'> O fatorial de $numero é: $resultado </label>"; 
    ?>
   </fieldset>
</body>
</html>