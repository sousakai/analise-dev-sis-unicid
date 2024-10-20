<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16.09 - FORM. TABUADA </title>
    <style> 
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
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-style: italic;
            font-size: 45px;
            margin-top: 50px;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: black;
            color: white;
        }
        body{
            background: rgb(50,35,187);
            background: radial-gradient(circle, rgba(50,35,187,1) 61%, rgba(0,0,0,1) 95%);
            align-content: center;
        }
    </style>
</head>
<body>
    <header id="titulo"> CALCULADORA - TABUADA </header>
    <fieldset class="tabuada">
        <form method="GET" action="16set_forTABUADA.php"> 
            <label id="tabuada"> DIGITE A TABUADA DESEJADA: </label>
            <input type="number" name="numero" placeholder="Escolha o valor">
            <input type="submit" name="enviar" value="calcular">
        </form>
    </fieldset>
    
</body>
</html>