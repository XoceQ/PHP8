<?php

$a = 4;

/* switch ($a) {

}
*/

echo match($a){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "El valor de la variable a no es un valor valido"
}

