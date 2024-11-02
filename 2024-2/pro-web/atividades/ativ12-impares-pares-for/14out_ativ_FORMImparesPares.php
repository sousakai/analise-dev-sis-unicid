<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ímpares e Pares</title>
</head>
<body>
    <fieldset>
        <form id="calculadora" method="POST" action="14out_ativ_ImparesPares.php">  
            <label for="calculadora"> Digite o número desejado:</label>
            <input type="number" name="numero" placeholder="Escolha o número">
            <label for="calculadora"> Escolha entre pares ou ímpares: </label>
            <select form="calculadora" name="operador">
                <option value="impares"> Ímpares </option>
                <option value="pares"> Pares </option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>
</html>