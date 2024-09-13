<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ. Calculadora 03.09</title>
</head>
<body>
    <div align="center">
    <h2> Calculadora simples </h2>
    <form action="03set_ativ_Calculadora.php" method="POST" id="calc">
        <label for="n1"> Digite o primeiro valor: </label>
        <input type="number" name="n1" required>
        
        <br>

        <label for="n2"> Digite o segundo valor: </label>
        <input type="number" name="n2" required>

        <select form="calc" name="operador" > Escolha a operação: 
            <option value="adi"> Adição </option>
            <option value="sub"> Subtração </option>
            <option value="mul"> Multiplicação </option>
            <option value="div"> Divisão </option>
        </select>
        
        <br>

        <input type="submit" value="Calcular">
    </form>
    </div>
</body>
</html>