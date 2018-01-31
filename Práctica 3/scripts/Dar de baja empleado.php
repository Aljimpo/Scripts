<?php

include "..\\bibliotecas\\biblioteca.php";
$txt = fopen("..\\ficheros\\Empleados_antiguos.txt" , "a+");

#Usamos una función para conectarnos a la BBDD por seguridad
$conecta = Conectadatabase();
$emp_no = $_POST['emp_no'];

#Sentencia SQL borra 
$delete="DELETE FROM `empleados` WHERE `emp_no`= $emp_no"; 

#Sentencia SQL inserta
$select="SELECT apellido,oficio,fecha_alt,dnombre
FROM empleados 
INNER JOIN departamentos ON empleados.dept_no = departamentos.dept_no where emp_no = $emp_no;";

#Sentencia SQL comprueba
$compruebadep = ("Select `emp_no` from empleados where `emp_no` = $emp_no");

#ejecuta la sentencia select
$ejselect= $conecta -> query($select);

#ejecuta la sentencia comprueba
$result= $conecta -> query($compruebadep);

#Creamos un IF anidado en el que si la sentencia comprueba funciona, se borrara el empleado y se mostrarán los datos.
#Creamos dos consultas "compruebadep" y "select" ya que una se encarga de comprobar que existe el empleado y la otra 
#de sacar de la base de datos los datos que mostraremos por pantalla.
if($row = $result ->fetch_assoc()){
	if($row = $ejselect ->fetch_assoc()){
		
		#ejecuta la sentencia delete.
		echo "Un empleado ha sido eliminado, estos son sus datos:". "</br>";
		echo "Apellido: ".$row['apellido']."</br>";
		echo "Oficio: ".$row['oficio']."</br>";
		echo "Nombre de departamento: ".$row['dnombre']."</br>";
		echo "Fecha de alta: ".$row['fecha_alt']."</br>";
			
		fwrite($txt,"\nEl empleado con apellido: ".$row['apellido'].", cuyo oficio es: ".$row['oficio'].", que se dio de alta en: ".$row['fecha_alt'].", cuyo departamento era: ".$row['dnombre'].", ha sido eliminado.");
		$conecta -> query($delete);
	}
}else{
	echo "El empleado no existe";
}

?>


