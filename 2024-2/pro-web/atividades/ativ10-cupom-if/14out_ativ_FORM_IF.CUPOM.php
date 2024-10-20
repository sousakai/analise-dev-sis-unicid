<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora CUPOM</title>
</head>
<body>
    <fieldset id="formCalculadora">
        <form id="calculadora" method="GET" action="14out_ativ_IF.CUPOM.php">
            <label for="valorProduto" id="valor"> Digite o valor do produto: </label> <br>
          R$: <input type="number" name="valorProduto" placeholder="Insira o valor">
            <label for="cupom"> </label>Insira o cupom de desconto: </label>
                <input name="cupom" type="text" placeholder="Insira o seu cupom">
            <br>
            <input id="botaoEnviar" type="submit" value="Calcular">
        </form>
    </fieldset>
</body>
</html>