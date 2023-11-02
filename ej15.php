<?php
    $num = readline("Introduzca un número: "); 
    $cont=0;

    for ($i = 1; $i<=$num; $i++){
        if (($num % $i) == 0){
            $cont+=1;
        }
    }
    if ($cont==2){
        echo "El número " . $num . " es primo";
    } else {
        echo "El número " . $num . " no es primo";
    }
?> 