<?php

$base = 5;
$exp = 4;

$resultado = 1;

//$i = 1;

// 2*2*2*2*2

/*while ($i <= $exp){
    $resultado = $resultado * $base;
    $i++;
}*/

for ($i = 0; $i <= $exp; $i++){
    $resultado = $resultado * $base; //5
}

echo "El valor de $base elevado a la $exp es: $resultado";