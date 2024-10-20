<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Açaí</title>
</head>
<body>
    <?php 
    $nome = $_GET["nome"];
    echo "Nome do cliente: <br>" . $nome . "<br>";
    $copo = $_GET["copo"];
    $valorCopo = 0;
    $valorCond = 0;
    //Coleta os valores do formulário, como nome e o copo selecionado.
    //Declara as variáveis e inicializa em 0. 
  
    //Verifica qual o copo selecionado e define o valor cobrado.
    switch($copo){
        case "pequeno":
            $valorCopo = 10;
            break;
            case "medio":
                $valorCopo = 10 * 1.5;
                break;
                case "grande":
                    $valorCopo = 10 * 2.00;
                    break;
                }
    //Seção de IFs para adicionar o valor dos condimentos para a variável valorCond. 
    //Verifica se o checkbox foi marcado e atribui o preço à variável.

    if(isset($_GET["ninho"])){
        $valorCond += 3.5;
        echo "<br> Leite ninho adicionado.";
    } if (isset($_GET["condensado"])){
        $valorCond += 3.5;
        echo "<br> Leite condensado adicionado.";
    } if (isset($_GET["confete"])){
        $valorCond += 2.5; 
        echo "<br> Confete adicionado.";
    } if (isset($_GET["pacoca"])){
        $valorCond += 1.5;
        echo "<br> Paçoca adicionada.";
    }
    $valorTotal = $valorCopo + $valorCond;
    //Calcula o valor total somando as duas outras variáveis, valorCopo e valorCond.
    //A variável recebe esses valores depois das sequências de switch e if, pois só nesse trecho os valores foram definidos.

    echo "<br>Parabéns, $nome! O seu pedido ficará:<br><h2>R$$valorTotal </h2><br>Valor dos condimentos:  adicionados:<br>R$$valorCond<br>Copo selecionado:<br> $copo (R$ $valorCopo)";
    ?>
</body>
</html>
