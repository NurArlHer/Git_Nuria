<?php
    $num = readline("Introduzca un número: "); 
    $factorial=1;

    for ($i = 1; $i<=$num; $i++){
        $factorial*=$i;
    }
    echo "El factorial de " . $num . " es " . $factorial;
?> 