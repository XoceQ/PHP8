<?php

$i = 1;

while ($i <= 10){

    echo "Hola mundo <br>";
    $i++;
}

echo "Has salido del bucle";
?>
<br>
<?php

$i = 10;

/*while ($i <= 10){

    echo "Hola mundo <br>";
    $i++;
}*/
do{ //Una sentencia que se ejecuta al menos una vez y es reejecutada cada vez que la condición se evalúa a verdadera.
    echo "Hola mundo <br>";
    $i++;
}while ($i < 10);

echo "Has salido del bucle";
?>
