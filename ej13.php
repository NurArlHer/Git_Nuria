<?php
    $num = readline("Introduzca un número: "); 
    echo "Tabla del " . $num . "<br>";
    for ($i = 1; $i<=10; $i++){
        echo $num . " X " . $i . " = " . $num * $i . "<br>";
    }
?> 