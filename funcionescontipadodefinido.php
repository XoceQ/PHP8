<?php

declare(strict_types=1);//El constructor declare es usado para fijar directivas de ejecución para un bloque de código. 


// int, float, array, string, bool, object 
function sumarEnteros( $entero1,  $entero2): float
{
    return ($entero1 + $entero2)/2;
}

$resultado = sumarEnteros(2, 5);

echo $resultado;