<?php
    $num=rand(1, 100);
    echo "El número es ", $num, "<br>";
    if (strlen($num) == 1){
        echo "El número " . $num . " tiene 1 dígito";
    } elseif (strlen($num) == 2){
        echo "El número " . $num . " tiene 2 dígitos";
    } else {
        echo "El número " . $num . " tiene 3 dígitos";
    }
?> 