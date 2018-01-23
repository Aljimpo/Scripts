<?php

include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';


// esta funcion toma coeficientes y exponentes y según sus propiedades, almacena un codigo html o otro
// se usa en lo siguientes casos:
// Eliminar la X en caso de que el exponente sea 0.
// Eliminar el 1 en caso de que el coeficiente sea 1.
// Eliminar el coeficiente, la X y el exponente en caso de que el coeficiente sea 0.
// Si el exponente es 1 no mostrarlo.

function excepcion($coeficiente , $exponente){
	//coeficientes que valen 1
	if($coeficiente ==1){
		//coeficientes que valen1 a uno cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="+x";
		}
		//coeficientes que valen 1 a uno cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep = "+".$coeficiente;
		}
		//coeficientes que valen a uno cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="+x<sup>$exponente</sup>";
		}
		
		//coeficientes que valen -1
	}elseif($coeficiente ==-1){
		//coeficientes que valen -1 a uno cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="-x";
		}
		//coeficientes que valen -1 a uno cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep = $coeficiente;
		}
		//coeficientes que valen -1 a uno cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="-x<sup>$exponente</sup>";
		}
	//coeficientes que valen menos de 0
	}elseif($coeficiente < 0){
		//coeficientes menores de 0 cuyo exponente es 1
		if($exponente == 1){
			return $excep =$coeficiente ."x";
		}
		//coeficientes menores que 0cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep =$coeficiente;
		}
		//coeficientes menores de 0 cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep =$coeficiente ."x<sup>$exponente</sup>";
		}
	//coeficientes que valen mas que 1
	}elseif($coeficiente >1){
		//coeficientes que valen mas que 1 cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="+".$coeficiente ."x";
		}
		//coeficientes que valen mas que 1 cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep ="+".$coeficiente;
		}
		//coeficientes que valen mas que 1 cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="+". $coeficiente ."x<sup>$exponente</sup>";
		}
	//coeficientes que valen 0	
	}elseif($coeficiente == 0){
		//coeficientes que valen 0 cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="";
		}
		//coeficientes que valen 0 cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep ="";
		}
		//coeficientes que valen 0 cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="";
		}
	}
}


//llamamos a la funcion de el primer polinomio introduciendo exponentes y coeficientes.


$excep10 = excepcion($co10, $exp10);

$excep11 = excepcion($co11, $exp11);

$excep12 = excepcion($co12, $exp12);

$excep13 = excepcion($co13, $exp13);


//llamamos a la funcion de el segundo polinomio introduciendo exponentes y coeficientes.
$excep20 = excepcion($co20, $exp20);

$excep21= excepcion($co21, $exp21);

$excep22 = excepcion($co22, $exp22);

$excep23 = excepcion($co23, $exp23);

//suma
suma($exponente1, $exponente2,$coeficiente1, $coeficiente2);

$sumv0= excepcion($sum0,0);
$sumv1= excepcion($sum1,1);
$sumv2= excepcion($sum2,2);
$sumv3= excepcion($sum3,3);

resta($exponente1,$exponente2,$coeficiente1,$coeficiente2);

$resv0= excepcion($res0,0);
$resv1= excepcion($res1,1);
$resv2= excepcion($res2,2);
$resv3= excepcion($res3,3);




?>