<?php
    $num1 = readline("Introduzca un número: "); 
    $num2 = readline("Introduzca un número: ");

    if ($num1 > $num2){
        echo "El número " . $num1 . " es mayor que " . $num2 . "<br>";
    } elseif ($num1 < $num2){
        echo "El número " . $num1 . " es menor que " . $num2 . "<br>";
    } else {
        echo "El número " . $num1 . " es igual que " . $num2 . "<br>";
    }
?> 