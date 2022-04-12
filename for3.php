<?php

$nombres = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

echo $nombres[0] . "<br>";
echo $nombres[3] . "<br>";
?>
<br>


<?php

$nombres = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

foreach ($nombres as $indice => $nombre){
    /*El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
    foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada */
    echo $nombre . " se encontraba en el indice $indice <br>";

}
?>
<br>
