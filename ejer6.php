<h2>Ejemplo 6</h2>

<?php
/*
 *crear un array que almacene los meses del año
 *Recorrer el arreglo con un FOR 
 */
$mes = array(
    "enero",
    "febrero",
    "marzo",
    "abril",
    "mayo",
    "junio",
    "julio",
    "agosto",
    "septiembre",
    "octubre",
    "noviembre",
    "diciembre"
);

for($i=0; $i<count($mes); $i++){
        echo $mes[$i]."<br/>";
}

?>