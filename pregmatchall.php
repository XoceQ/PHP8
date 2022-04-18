<!DOCTYPE html>
<html>
<body>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";//Utilice una expresión regular para realizar un recuento sin distinción de mayúsculas y minúsculas del número de apariciones de "ain" en una cadena.
echo preg_match_all($pattern, $str);//La función le dirá cuántas coincidencias se encontraron para un patrón en una cadena.
?>
    
</body>
</html>

