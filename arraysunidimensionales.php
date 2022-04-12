<?php
/*array unidimensional sivren para almacenar mas de un dato 
y para identificar a cada uno de esos datos teniamos que utilizar indices,
pueden ser de tipo numerico o string*/ 
$array = [10, 13, 15, 20];

$array[4] = 17;
 
echo $array[4];
?>
<br>


<?php

/* $array = [10, 13, 15, 20];*/

$array[] = 10;
$array[] = 13;
$array[] = 14;
$array[] = 20;
$array[] = 17;
 
echo $array[4];
?>
<br>


<?php

$array = [10, "Victor", 13, 15, false];


echo $array[1];
?>
<br>


<?php

$datos = [ //forma de utilizar indices no por numero sino por nombre 
    'nombre' => 'xoceq',
    'email' => 'xoceq@gmail.com',
    'celular' => '9434536',
];


echo $datos['email'];

?>
