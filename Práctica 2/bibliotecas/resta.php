<?php

include 'C:\\xampp\\htdocs\\practica\\bibliotecas\\extraer.php';


function resta($exponente1,$exponente2,$coeficiente1,$coeficiente2){
	global $res0 ,$res1, $res2, $res3, $res4, $res5, $res6, $res7;
	for($i=0;$i<4;$i++){
	
		switch($exponente1[$i]){
			
			case 0:
				$res0 += $coeficiente1[$i];
				break;
			case 1:
				$res1 += $coeficiente1[$i];
				break;
			case 2:
				$res2 += $coeficiente1[$i];
				break;
			case 3:
				$res3 += $coeficiente1[$i];
				break;
			
		}switch($exponente2[$i]){
			case 0:
				$res0 -= $coeficiente2[$i];
				break;
			case 1:
				$res1 -= $coeficiente2[$i];
				break;
			case 2:
				$res2 -= $coeficiente2[$i];
				break;
			case 3:
				$res3 -= $coeficiente2[$i];
				break;
			
		}
	}

}




?>

