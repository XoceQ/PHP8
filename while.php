<?php

$base = 5;
$exp = 2;

$resultado = 1;

$i = 1;

// 2*2*2*2*2

while ($i <= $exp){
    $resultado = $resultado * $base;
    $i++;
}

echo "El valor de $base elevado a la $exp es: $resultado";