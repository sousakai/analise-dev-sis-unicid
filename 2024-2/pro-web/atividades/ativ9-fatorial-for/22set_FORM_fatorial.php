<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FATORIAL - FORM</title>
    <style>
        .fatorial{
            text-align: center;
            padding: 30px;
            margin: 50px;
            align-self: center;
            background-color: whitesmoke;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background: radial-gradient(circle, rgba(73,9,9,1) 0%, rgba(42,17,17,1) 35%);
        }
        #enviar{
            margin-left: 10px;
            background-color: bisque;
        }
    </style>
</head>
<body>
<fieldset class="fatorial">
    <h1>Calculadora de Fatorial</h1>
    <form  method="GET" action="22set_FATORIAL.php">
        <label for="numero"> Digite o número para o cálculo de fatorial:</label>
        <input type="number" name="numero" placeholder="Digite um valor...">
        <input type="submit" value="Calcular" id="enviar">
    </form>
</fieldset>
</body>
</html>