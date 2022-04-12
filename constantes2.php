<?php

define('CURSO','PHP 8 DESDE CERO');
define('USUARIO_1','vICTOR');

define('ANIMALES', [
    'Perro',
    'gato',
    'Loro',
    'Tortuga',
]); 


if(defined('CURSO')){
    echo "SI se ha definido";
}

echo "Mi versión de PHP es: ". PHP_VERSION;// versión de PHP que estoy usando
echo "<br>";
echo "Mi sistema operativo es: " . PHP_OS;
echo "<br>";// salto de linea
echo __LINE__; //en que linea estoy 
echo "<br>";
echo PHP_EXTENSION_DIR;