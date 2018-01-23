<?php
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';

// esta funcion toma coeficientes y exponentes y según sus propiedades otorga un valor  a x y realiza las operaciones propias del polinomio.
// se usa en lo siguientes casos:
// Eliminar la X en caso de que el exponente sea 0.
// Eliminar el 1 en caso de que el coeficiente sea 1.
// Eliminar el coeficiente, la X y el exponente en caso de que el coeficiente sea 0.
// Si el exponente es 1 no mostrarlo.

function excepcionueva($coeficiente , $exponente , $x){
	//la variable $mul multiplica coeficiente y valor para solucionar problemas de signo.
	$mul =$coeficiente * $x;
	//negcoeficiente cambia el signo a la variable coeficiente.
	$negcoeficiente = $coeficiente * -1;
	//coeficientes que valen 1
	if($coeficiente ==1){
		//coeficientes que valen1 a uno cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="$mul";
		}
		//coeficientes que valen 1 a uno cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep = "+".$coeficiente;
		}
		//coeficientes que valen a uno cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="+$x<sup>$exponente</sup>";
		}
		
		//coeficientes que valen -1
	}elseif($coeficiente ==-1){
		//coeficientes que valen -1 a uno cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="$mul";
		}
		//coeficientes que valen -1 a uno cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep = $coeficiente;
		}
		//coeficientes que valen -1 a uno cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="($mul<sup>$exponente</sup>)";
		}
	//coeficientes que valen menos de 0
	}elseif($coeficiente < 0){
		//coeficientes menores de 0 cuyo exponente es 1
		if($exponente == 1){
			return $excep =("-(".$negcoeficiente ."*$x)");
		}
		//coeficientes menores que 0cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep =$coeficiente;
		}
		//coeficientes menores de 0 cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="+(".$negcoeficiente ."*$x<sup>$exponente</sup>)";
		}
	//coeficientes que valen mas que 1
	}elseif($coeficiente >1){
		//coeficientes que valen mas que 1 cuyo exponente vale 1
		if($exponente ==1){
			return $excep ="+(".$coeficiente ."*$x)";
		}
		//coeficientes que valen mas que 1 cuyo exponente vale 0
		elseif($exponente == 0){
			return $excep ="+".$coeficiente;
		}
		//coeficientes que valen mas que 1 cuyo exponente vale mas que 1
		elseif($exponente >1){
			return $excep ="+ (".$coeficiente ."*$x<sup>$exponente</sup>)";
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

function pol($i){
	
include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';
	
	$pol = array();
	settype($valor[$i],"integer");
	settype($pol[$i],"string");
 return excepcionueva($co10, $exp10 ,$valor[$i]) . excepcionueva($co11, $exp11,$valor[$i]) . excepcionueva($co12, $exp12,$valor[$i]) . excepcionueva($co13, $exp13,$valor[$i]);
 

}

?>