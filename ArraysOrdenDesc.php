<?php

echo "<br>"."<br>"."Orden Arreglos"."</b>"."<br>"; //saltos de linea
echo "<br>"."<b>"."rsort() Orden Descendente"."</b>"."<br>"; // rsort() Ordena un array en orden inverso

$peso = array("José"=>"80", "Fernando"=>"75", "Camilo"=>"77");
rsort($peso);

foreach($peso as $x => $x_valor){
    echo "Llave=" . $x . ", Valor=" . $x_valor;
    echo "<br>";
}
?>