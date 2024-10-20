<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <?php
        $cupom = trim(strtoupper($_GET['cupom']));
        $valorProduto = $_GET['valorProduto'];
        $valorFinal = 0;
        if($valorProduto > 100 && $cupom == "QUERO10"){
            $valorFinal = $valorProduto - ($valorProduto * (10/100));
            echo "Obrigado por utilizar o cupom $cupom! <br> O valor do seu produto é de: R$" . number_format($valorProduto, 2);

        }else if($valorProduto > 200 && $cupom == "COMPREIMUITO"){
            $valorFinal = $valorProduto - ($valorProduto * (15/100));
            echo "Obrigado por utilizar o cupom $cupom! <br> O valor do seu produto é de: R$" . number_format($valorProduto, 2);
        } else if ($valorProduto < 100 && $cupom !=""){
            echo "Uso inválido de cupom. <br> O valor do produto é de: R$" . number_format($valorProduto, 2);
        } else if ($valorProduto < 200 && $cupom !=""){
            echo "Uso inválido de cupom. <br> O valor do produto é de: R$" . number_format($valorProduto, 2);
        }
        else { 
            $valorFinal = $valorProduto;
            echo "Você não possui cupom ativo. <br> O valor do produto é de: R$" . number_format($valorProduto, 2);
        }

    ?>
</body>
</html>