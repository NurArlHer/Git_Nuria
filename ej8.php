<?php
    $num1 = readline("Introduzca un número: "); 

    if ($num1 > 0 ){
        echo "El número " . $num1 . " es positivo <br>";
    } elseif ($num1 < 0){
        echo "El número " . $num1 . " es negativo <br>";
    } else {
        echo "El número " . $num1 . " es igual a 0 <br>";
    }
?> 