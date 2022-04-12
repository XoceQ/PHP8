<?php

/* Factorial
6! = 1 * 2 * 3 * 4 * 5 * 6 
*/

function factorial($n){

    $resultado = 1;
    
    for ($i=1; $i <= $n ; $i++){
        $resultado = $resultado * $i;
    }

    return $resultado;
    
    /* echo "El factorial de $n es: " . $resultado; */

}

$resultado = factorial(6);

echo "El factorial de 6 es:  $resultado";

?>