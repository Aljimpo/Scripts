<?php
#Creamos esta funcion ya que se utilizara varias veces en la web.
function Conectadatabase(){
	return mysqli_connect("localhost","root","","empresa");
}

#Creamos esta funcion para ahorrarnos el uso de otro archivo .php
function InsertaDepartamento(){

	#Abrimos el archivo departamentos.txt
	$departamentos = fopen("..\\ficheros\\departamentos.txt" , "r");

	#Usamos una funcion para conectarnos a la BBDD por seguridad
	$conecta = Conectadatabase();

	#este While es una de las formas mas faciles de iterar por todas las lineas de un archivo.
	while(!feof($departamentos)){
		$fgets = fgets ($departamentos);
		#Creamos un array que contenga en cada valor de memoria del array una palabra de la linea (3 palabras, dept_no,dnombre,loc).
		$arraydepartamentos	= preg_split("[\s]", $fgets);
		
		#creamos una variable para cada palabra almacenada en el array, hace mas visual el codigo.
		$dnombre = $arraydepartamentos[0];
		$dept_no = $arraydepartamentos[1];
		$loc = $arraydepartamentos[2];
		
		#Creamos el insert y lo ejecutamos.
		$query="INSERT INTO departamentos(dept_no,dnombre,loc) VALUES ($dept_no,'$dnombre','$loc')";
		$conecta -> query($query);
	}
}

?>