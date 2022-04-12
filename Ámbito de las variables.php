<?php

$a = 5;
$b = 10;

function test(&$n){ // pasar la variable global
     
    $n = $n + 10; // voy a recibir un numero y ese numero lo voy a aumentar en 10 unidades.
    //5 + 10, 10 +10
}

test($a);
test($b);

echo $a . "<br>";
echo $b;
