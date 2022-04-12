<?php

for ($i=1; $i <= 20 ; $i++){

    if($i == 7 || $i == 15){ //se llaman operadores en cortocircuito porque si no se cumple la condición de un término no se evalúa el resto de la operación.
        continue;

    }

    echo $i . "<br>";
}
echo "Saliste del bucle";
