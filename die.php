<?php

for ($i=1; $i <= 20 ; $i++){

    if($i == 7 || $i == 15){ //se llaman operadores en cortocircuito porque si no se cumple la condición de un término no se evalúa el resto de la operación.
        
        die();// muere antes de llegar a 7, Este constructor de lenguaje es equivalente a exit().

    }

    echo $i . "<br>";
}
echo "esta linea no se ejecutara";
