<?php

$a = 5;
$b = 3;
echo "Primer parrafo <br>";

if($a < $b){ //si se cumple la condición se imprimira los 3 mensajes, sino se imprime el texto editado
    
    echo "Segundo parrafo <br>";

}else{
    echo "Segundo parrafo editado <br>";
}
     



echo "Tercer parrafo <br>";
?>
<br>
<?php

$a = 4;
$b = 4;

if ($a > $b) {
    echo "El valor de a es mayor que el valor de b";
}elseif($a < $b){ // se anida otro condicional
    echo"El valor de a es menor que el valor de b";
}else{
    echo "El valor de a es igual que el valor de b";
}
?> 