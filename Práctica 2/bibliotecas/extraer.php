<?php

$coeficientes = fopen("C:\\xampp\\htdocs\\practica\\ficheros\\coeficientes.txt" , "r");
$exponentes = fopen("C:\\xampp\\htdocs\\practica\\ficheros\\exponentes.txt" , "r");


//primer coeficiente en string
$fgets= fgets ($coeficientes);
//segundo coeficiente en string
$fgets1= fgets ($coeficientes);

//primer exponente en string
$fgets2 = fgets ($exponentes);
//segundo exponente en string
$fgets3 = fgets($exponentes);

$valor = array();
$valor = file("C:\\xampp\\htdocs\\practica\\ficheros\\valores.txt");




// Dividimos las cadenas en arrays, con un numero por valor de memoria en el array.

$coeficiente1 = preg_split("[\s]", $fgets);
$coeficiente2 = preg_split("[\s]", $fgets1);
$exponente1 = preg_split("[\s]", $fgets2);
$exponente2 = preg_split("[\s]", $fgets3);

//transformamos los arrays en variables individuales.


//variables coeficiente1
$co10 = $coeficiente1[0];
$co11 = $coeficiente1[1];
$co12 = $coeficiente1[2];
$co13 = $coeficiente1[3];
//variables coeficiente2
$co20 = $coeficiente2[0];
$co21 = $coeficiente2[1];
$co22 = $coeficiente2[2];
$co23 = $coeficiente2[3];
//variables exponente1
$exp10 = $exponente1[0];
$exp11 = $exponente1[1];
$exp12 = $exponente1[2];
$exp13 = $exponente1[3];
//variables exponente2
$exp20 = $exponente2[0];
$exp21 = $exponente2[1];
$exp22 = $exponente2[2];
$exp23 = $exponente2[3];

?>
