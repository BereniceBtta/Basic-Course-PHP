<h2>Ejemplo 3</h2>

<?php

/*crear un programa que imprima por pantalla los primeros
 *20 números naturales
 */
$numero =1;
$contador =2;
while($contador <=20){
    //$numero = $numero*$contador;
    $numero *= $contador;
    
    //desglozará cada multiplicación --++
    echo $numero."<br>";

    //sirve para incrementar o hacer una
    //acción repetitiva
    //SIN ESTE, NUESTRO BUBLE SERÍA INFINITO
    //NOS CAUSARIA UN ERROR DE APP
    $contador++;
}
echo "el resultado de multiplicar
los primeros 20 números naturales es: " .$numero;

?>