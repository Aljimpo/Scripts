<?php

include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';


function suma($exponente1,$exponente2,$coeficiente1,$coeficiente2){
	global $sum0, $sum1, $sum2, $sum3;
	for($i=0;$i<4;$i++){
	
		switch($exponente1[$i]){
			
			case 0:
				$sum0 += $coeficiente1[$i];
				break;
			case 1:
				$sum1 += $coeficiente1[$i];
				break;
			case 2:
				$sum2 += $coeficiente1[$i];
				break;
			case 3:
				$sum3 += $coeficiente1[$i];
				break;
		}switch($exponente2[$i]){
			case 0:
				$sum0 += $coeficiente2[$i];
				break;
			case 1:
				$sum1 += $coeficiente2[$i];
				break;
			case 2:
				$sum2 += $coeficiente2[$i];
				break;
			case 3:
				$sum3 += $coeficiente2[$i];
				break;
			
		}
	}
	
}


?>