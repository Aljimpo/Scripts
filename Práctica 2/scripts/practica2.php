<?php

include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\suma.php';
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\resta.php';
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\excepciones.php';
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\evalua.php';
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\excepcionesevalua.php';
//La funcion max busca en un array su valor mas grande.
//La usamos para ver si algun exponente es mayor a 3, si lo hay, muestra un error y termina la ejecución del programa.
if( max($exponente1) >3 || max($exponente2) >3 ){
	echo "Hay un exponente mayor que 3, introduzca exponentes validos.";
}else{
	
//mostramos el primer polinomio, las variables $excepxx se crean en la biblioteca "excepciones".
//cada variable $excepxx muestra un termino de el polinomio.
echo "El primer polinomio es: (".$excep10 . $excep11 . $excep12 . $excep13 .")"."</br>";

// Tabla polinomio1.
echo "<table border=1>
<tr >
<td>X<sup>$exp10</sup></td>
<td>X<sup>$exp11</sup> </td>
<td>X<sup>$exp12</sup></td>
<td>X<sup>$exp13</sup></td>
</tr>
<tr>
<td>$co10</td>
<td>$co11</td>
<td>$co12</td>
<td>$co13</td>
</tr>
</table>";

//mostramos el segundo polinomio, las variables $excepxx se crean en la biblioteca "excepciones.php".
//cada variable $excepxx muestra un termino de el polinomio.
echo "El segundo polinomio es: (". $excep20 . $excep21 . $excep22 . $excep23 .")". "</br>";

//Tabla polinomio2.
echo "<table border=1>
<tr >
<td>X<sup>$exp20</sup></td>
<td>X<sup>$exp21</sup> </td>
<td>X<sup>$exp22</sup></td>
<td>X<sup>$exp23</sup></td>
</tr>
<tr>
<td>$co20</td>
<td>$co21</td>
<td>$co22</td>
<td>$co23</td>
</tr>
</table>";

//Si el contenido de todos los terminos que muestran la suma esta vacio, significa que la suma es igual a 0.
//Las variables $sumv3 se crean en la biblioteca "excepciones.php" que utiliza variables de la biblioteca "suma.php" para crearlas.
if($sumv3 =="" and $sumv2 =="" and $sumv1 =="" and $sumv0 ==""){
	echo "La resta de los polinomios es: (0)"."</br>";
}else{
	echo "La suma de los polinomios es: (". $sumv3 . $sumv2 . $sumv1 . $sumv0 .")"."</br>";
}

//Si el contenido de todos los terminos que muestran la resta esta vacio, significa que la resta es igual a 0.
//Las variables $sumv3 se crean en la biblioteca "excepciones.php" que utiliza variables de la biblioteca "resta.php" para crearlas.
if($resv3 =="" and $resv2 =="" and $resv1 =="" and $resv0 ==""){
	
	echo "La resta de los polinomios es: (0)"."</br>";
}else{
	echo "La resta de los polinomios es: (". $resv3 . $resv2 . $resv1 . $resv0 . ")" ."</br>";
}

echo "</br>";
echo "evaluamos el primer polinomio"."</br>";
//Creamos la tabla para la evaluación del polinomio.
echo "<table border=1>
<tr >
<td><b>Valor del fichero</b></td>
<td><b>Evaluar polinomio</b></td>
<td><b>Resultado</b></td>
</tr>";
for($i=0;$i<sizeof($valor);$i++){
//creamos una variable $resul[$i] que almacene los resultados de la funcion resul[$i]
$resul[$i] = resul($i);
$pol[$i] = pol($i);
echo 
"<tr>
<td>$valor[$i]</td>
<td>$pol[$i]</td>
<td>$resul[$i]</td>
</tr>";
}
echo "</table>";

}
?>
