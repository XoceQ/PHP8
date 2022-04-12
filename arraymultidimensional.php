<?php

echo "<br>"."<br>"."Arreglos multidimensionales"."</b>"."<b>";//<br> saltos de linea

$carros = array (
    array("Mitsubishi",2700,320),
    array("Ford",2500,310),
    array("Mustang",2300,230),
    array("Range",3500,130)

);

for  ($fila = 0; $fila < 4; $fila++){
    echo "<p><b>Fila Numero $fila</b></p>";
    echo "<ul>";
    for ($columna = 0; $columna < 3; $columna++){
        echo "<li>".$carros[$fila][$columna]."</li>";
    }
    echo "</ul>"; //se utiliza para definir una lista desordenada de elementos.
}
echo $carros[0][0].": Cilindraje: ".$carros[0][1].", Par Nm: ".$carros[0][2].".<br>";
echo $carros[1][0].": Cilindraje: ".$carros[1][1].", Par Nm: ".$carros[1][2].".<br>";
echo $carros[2][0].": Cilindraje: ".$carros[2][1].", Par Nm: ".$carros[2][2].".<br>";
echo $carros[3][0].": Cilindraje: ".$carros[3][1].", Par Nm: ".$carros[3][2].".<br><br>";

?>