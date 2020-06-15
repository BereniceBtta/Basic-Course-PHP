<h2>Ejemplo 5</h2>

<?php

/*
*imprimir por pantalla una tabla de multiplicar
*del número pasado en el GET por URL.
*/

if(isset($_GET["num"]) && is_numeric($_GET["num"])){
    $num=$_GET["num"];
}else{
    $num= 5;
    echo"<p>Num por defecto</p>";
}

echo "<h2>Tabla de multiplicar de ".$num."<h2>";

for($i = 1; $i<=10; $i++){
    echo $i." x " .$num." = ".($i*$num)."<br/>";
}

//en la URL se modifica el parametro get y se cambia
//la tabla de multiplicar

//el get sirve para mostrar información que se envía de manera visible
//y que puede modificarse a través de la URL

?>