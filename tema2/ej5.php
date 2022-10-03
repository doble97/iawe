<?php
    $eleccion = rand(1,9);
    switch ($eleccion) {
        case 1:
            echo "Amenaza fantasma";
            break;
        
        case 2:
            echo "Star wars 2";
            break;
        case 3:
            echo "Star wars 3";
            break;
        case 4:
            echo "Star wars 4";
            break;
        case 5:
            echo "Star wars 5";
            break;
        default:
            echo "Pelicula cualquiera";
            break;
    }
?>