<?php

function valoracion($nombre, $rating = 5){ //se toma el valor por defecto el valor de 5
    echo "El  $nombre tiene un rating de $rating";
}

function concatenar(...$palabras){ //se toma el valor por defecto el valor de 5

    $resultado = "";

    foreach($palabras as $palabra){
        
        $resultado .= $palabra . " "; //operadores de asignación combinada
        // reemplazara el valor de la variable resultado y concatenara con el texto 

    }

    echo $resultado;

}

concatenar('curso', 'php', '8', 'desde', 'cero');
