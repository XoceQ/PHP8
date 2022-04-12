<?php

function valoracion($nombre, $rating = 5){ //se toma el valor por defecto el valor de 5
    echo "El  $nombre tiene un rating de $rating";
}

function concatenar(....$palabras){ //se toma el valor por defecto el valor de 5

    $resultado = "";

    foreach($palabras as $palabra){
        
        $resultado = $resultado . $palabra . " "; 

    }

    echo $resultado;

}

concatenar('curso', 'php', '8', 'desde', 'cero');
