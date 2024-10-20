<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <style>
        .vermelho {
            color: #ad0e05
        }   
        .verde {
            color: #0bd937
        }
        body{
            background: rgb(50,35,187);
            background: radial-gradient(circle, rgba(50,35,187,1) 61%, rgba(0,0,0,1) 95%);
            align-content: center;
        }
        .tabuada{
            text-align: center;
            align-content: center;
            margin: 50px;
            padding: 40px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: whitesmoke;
            margin-right: 20%;
            margin-left: 20%;
            margin-top: 20px;
            
        }
        #titulo {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-style: italic;
            font-size: 30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16.09 - FOR </title>
</head>
<body>
    <fieldset class="tabuada">
    <span id='titulo'> RESULTADO: <br> </span>
    <?php
    $tabuada = $_GET["numero"];
    $resultado = 0;
    for($contador = 0; $contador <= 10; $contador ++){
    //A variável contador só existe dentro dessa iteração for. Se ela for usada posteriormente, declare FORA do laço.

        $resultado = $tabuada * $contador;
        echo "$tabuada x $contador = ";
        if($resultado % 2 == 0) {
            ?>
            
            <span class="vermelho">
            <?php
            echo "$resultado <br>";
            ?>
            </span>

            <?php
        }else {
            echo "<span class ='verde'> $resultado <br> </span>";
        }
    }
    ?>
    </fieldset>
</body>
</html>