<h2>Ejemplo 3</h2>

<?php

/*crear un programa que imprima por pantalla los cuadrados
 * de los 30 primeros numeros naturales y saber si es par
 * o impar
 */

for($i = 1; $i <= 30; $i++){
    $cuadrado = $i*$i;
    echo "el cuadrado de" .$i."es".$cuadrado;
    if($cuadrado%2 ==0){
        echo "y es par";
    }else{
        echo "y es impar";
    }  
    echo "</br>";
}

?>