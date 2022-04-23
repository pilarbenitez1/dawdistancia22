<?php
echo "tarea dawdistancia22 actualizada".
echo "<br>";
/**
* Función que nos permite averiguar la suma de
* dos parámetros introducidos
*@author Pilar Benítez Serrano <pilarbenitezserrano@gmail.com>
*@version 0.0 Versión inicial del ejercicio
*@internal Este ejercicio es de prueba para la entrega 5
*@param int $x Primer parámetro
*@param int $y Segundo parámetro
*@return int Resultado de la suma
*/
function suma(int $x, int $y){
$z=$x + $y;
return $z;
}
echo "5 + 10 =".suma(5,10)."<br>";
echo "7 + 2 =".suma(7, 2)."<br>";

/**
* Función que nos permite averiguar la resta de
* dos parámetros introducidos
*@author Pilar Benítez Serrano <pilarbenitezserrano@gmail.com>
*@version 0.1 Versión inicial del ejercicio
*@internal Este ejercicio es de prueba para la entrega 5
*@param int $a Primer parámetro
*@param int $b Segundo parámetro
*@return int Resultado de la suma
*/

function resta(int $a, int $b){
$c=$a-$b;
return $c;
}
echo "5 - 10 =".resta(5, 10)."<br>";
echo "7 - 2 =".resta(7, 2)."<br>";

