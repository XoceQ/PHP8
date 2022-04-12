<?php

$array = range(10, 20);

var_dump($array);

/*var_dump proporciona información sobre el tamaño y tipo de datos de la variable y,
en el caso de arrays y objetos, de los elementos que la componen.*/ 
?>

<br>
<br>
<?php

$array = ['victor', 'pamela', 'elizabeth', 'iris'];

if (in_array('Elizabeth', $array)){
    echo "El valor buscado se encuentra dentro del array";

}else{
    echo "El valor buscado no se encuentra dentro del array";
}
?>

<br>
<?php

$array = ['victor', 'pamela', 'elizabeth', 'iris'];

unset($array[2]);

if (in_array('iris', $array)){
    echo "El valor buscado se encuentra dentro del array";

}else{
    echo "El valor buscado no se encuentra dentro del array";
}
?>