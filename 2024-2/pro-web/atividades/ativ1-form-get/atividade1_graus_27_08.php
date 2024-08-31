<html>
    <title> ATIVIDADE 27.08 - GRAUS</title>
    <body>

    <?php
    $graus_celsius = 0;
    $graus_celsius = $_POST['celsius'];
    $graus_fahrenheit = $graus_celsius * 1.8 + 32;

    echo "<h1> A temperatura de " . $graus_celsius . " equivale a: <br>" . $graus_fahrenheit . "ºF. </h1>";
    ?>
    </body>
</html>