<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH CASE GRAUS</title>
</head>
<body>
    <fieldset>
        <form id="calculadora" method="POST" action="14out_ativ_SwitchCaseGraus.php"> 
            <label> Digite o valor a ser convertido (em graus):</label> <br>
            <input type="number" placeholder="Insira o valor" name="valor">
            <label> Escolha a conversão: </label> <br>
            <select form="calculadora" name="conversao">
                <option value="fah/cel"> Fahrenheit/Celsius </option>
                <option value="cel/fah"> Celsius/Fahrenheit </option>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </fieldset>
</body>
</html>