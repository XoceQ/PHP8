<?php


$cadena = "aeiou"; 

echo $cadena[2]; //escoge la letra en la posición insertada
?>
<br>

<?php


$cadena = "aeiou";

echo strlen($cadena); // cuenta cantidad de caracteres en la palabra
?>
<br>
<?php


$cadena = "Hola mundo como estás";

echo strrpos($cadena, 'mundo') ? 'Si se encuentra' : 'No se encuentra'; //  Encuentra la posición de la última aparición de un substring en un string.
?>
<br>
<?php

$cadena1 = "Prueba";
$cadena2 = "Prueba";

if(strcmp($cadena1, $cadena2) == 0){//Comparación de string segura a nivel binario
    echo "Las dos cadenas son iguales";
}else{
    echo "las cadenas son diferentes";
}
?>
<br>

<?php

$cadena = "Hola mundo";

echo strtoupper($cadena);//Devuelve el string con todos los caracteres alfabéticos convertidos a mayúsculas.

?>
<br>
<?php

$cadena = "hola mundo";

echo ucfirst($cadena);//Convierte el primer caracter de una cadena a mayúsculas

?>
<br>
<?php

$cadena = "hola mundo, como van";

echo ucfirst($cadena);// Convierte a mayúsculas el primer caracter de cada palabra de una cadena.
?>

 