<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Açaí</title>
</head>
<body>
    <fieldset>    
    <form action="09set_acai.php" method="GET">
    <label> Nome: </label>
    <input type="text" placeholder="Digite seu nome." name="nome" required> 
    <br>
    <label for="copo"> Copo: </label> 
    Valor base: R$ 10,00
    <br>
    <input type="radio" name="copo" value="pequeno" checked="checked"> Copo pequeno
    <br>
    <input type="radio" name="copo" value="medio"> Copo médio (+50%)
    <br>
    <input type="radio" name="copo" value="grande"> Copo grande (+100%)
    <br>

    Condimentos:
    <br>
    <input type="checkbox" name="ninho" value="condimento"> Leite ninho (+3,50)
    <br>
    <input type="checkbox" name="condensado" value="condimento"> Leite condensado (+3,50)
    <br>
    <input type="checkbox" name="confete" value="condimento"> Confete (+2,50)
    <br>
    <input type="checkbox" name="pacoca" value="condimento"> Paçoca (+1,50)

    <input type="submit" value="Concluir pedido">
    </form>
    </fieldset>
</body>
</html>