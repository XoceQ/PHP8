
<?php //var_dump proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y objetos, de los elementos que la componen. print_r no da información sobre el tamaño de la variable ni sobre el tipo de datos.
$a = 10;
$b = 10;

var_dump($a == $b); //valor igual a

?>
<br>
<?php

$a = 10;
$b = 5;

var_dump($a != $b); //valor diferente a

?>
<br>
<?php

$a = 5;
$b = 5;

var_dump($a <> $b); //valor diferente a

?>
<br>
<?php

$a = 10;
$b = 5;

var_dump($a > $b); //valor mayor que

?>
<br>
<?php

$a = 7;
$b = 5;

var_dump($a < $b); //valor menor que

?>
<br>
<?php

$a = 3;
$b = 3;

var_dump($a <= $b); //valor menor o igual que

?>
<br>
<?php

$a = 6;
$b = 3;

var_dump($a >= $b); //valor mayor o igual que

?>
<br>
<?php

$a = true;
$b = false;

var_dump($a && $b); //true si tanto $a como $b son true.

?>
<br>
<?php

$a = 4;
$b = 5;

var_dump($a < $b || $b > 3); //true si cualquiera de $a o $b es true.
?>