
<?php

/* 9! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9
factorial
*/
$resultado = 1;

for ($i=1; $i <= 9 ; $i++){
    $resultado = $resultado * $i;

}

echo "El factorial de 9 es: " .$resultado;

?>