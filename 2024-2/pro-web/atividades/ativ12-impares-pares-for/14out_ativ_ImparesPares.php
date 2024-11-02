<?php
$numero = $_POST['numero'];
$operador = $_POST['operador'];
$i = 0;
$soma = 0;
for($i; $i <= $numero; $i++){
//Abrimos um for que vai realizar a conta até igualar o input do usuário.

    if($operador == "pares"){
        if($i % 2 == 0){
// O número que muda é $i, e por isso usamos if($i % 2 ==0), para verificar cada número até bater com o input do usuário.
            $soma += $i;
// Se for par, ele adiciona na var soma.
        }
    } else {
            if($i % 2 !=0){
// Mesma lógica para números ímpares.
                $soma += $i;
            }
        }
    }
echo "As somas dos números $operador, de 0 até $numero é de $soma."
?>