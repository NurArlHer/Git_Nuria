<?php
    $num1 = readline("Introduzca un número del 1 al 7: "); 

    switch ($num1){
        case 1:
            echo "Hoy es lunes";
            break;
        case 2:
            echo "Hoy es martes";
            break;
        case 3:
            echo "Hoy es miércoles";
            break;
        case 4:
            echo "Hoy es jueves";
            break;
        case 5:
            echo "Hoy es viernes";
            break;
        case 6:
            echo "Hoy es sábado";
            break;
        case 7:
            echo "Hoy es domingo";
            break;     
        default:
            echo "Opción inválida";
            break;      
    }
?> 