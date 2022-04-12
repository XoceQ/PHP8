<?php

echo "<br>"."<br>"."Orden Arreglos"."</b>"."<br>"; //saltos de linea
echo "<br>"."<b>"."sort() Orden Ascendente"."</b>"."<br>"; // sort() Ordena un array

$peso = array("José"=>"80", "Fernando"=>"75", "Camilo"=>"77");
sort($peso);

foreach($peso as $x => $x_valor){
    echo "Llave=" . $x . ", Valor=" . $x_valor;
    echo "<br>";
}
?>