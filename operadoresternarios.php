<?php

$a = 7;
$b = 7;

/*if ($a > $b) {
    echo "El valor de a es mayor que el valor de b";
}elseif($a < $b){ // se anida otro condicional
    echo"El valor de a es menor que el valor de b";
}else{
    echo "El valor de a es igual que el valor de b";
}*/

$valor = $a > $b ? 'mayor' : ( $a < $b ? 'menor' : 'igual');

echo "El valor de a es $valor que el valor de b";