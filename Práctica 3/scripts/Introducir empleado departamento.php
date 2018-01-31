<?php
include "..\\bibliotecas\\biblioteca.php";

#tomamos las variables del formulario, elegimos el metodo "POST" ya que es mas seguro que "GET".
$emp_no = $_POST['emp_no'];
$apellido = $_POST['apellido'];
$oficio = $_POST['oficio'];
$dir = $_POST['dir'];
$salario = $_POST['salario'];
$comision= $_POST['comision'];
$dept_no = $_POST['dept_no'];
$fecha_alt= $_POST['fecha_alt'];

#Usamos una función para conectarnos a la BBDD por seguridad
$conecta = Conectadatabase();

#Creeamos la sentencia SQL para poder insertar datos en la base de datos, con esta tabulación la visualización es mas facil.
$insert="INSERT INTO empleados
(emp_no,
apellido,
oficio,
dir,
fecha_alt,
salario,
comision,
dept_no)
VALUES 
($emp_no,
'$apellido',
'$oficio',
$dir,
'$fecha_alt',
$salario,
$comision,
$dept_no)";

#crearemos un select con el único proposito de comprobar si existe el departamento que nos proporciona el formulario.
$compruebaemp="select emp_no from empleados where emp_no = $emp_no";


#ahora creamos un select con el único proposito de comprobar si ya existe un empleado con el número de formulario que nos proporciona el formulario.
$compruebadep="select dept_no from departamentos where dept_no = $dept_no";

#Añadimos el contador de empleados ya que no puedo añadirlo en otro codigo sql_regcase
$contar ="select count(*) as contar from empleados";



#ejecutamos las sentencias y almacenamos en variables para poder usarlas en las estructuras de control.
$ifcompruebadep = $conecta -> query($compruebadep);
$ifcompruebaemp = $conecta -> query($compruebaemp);



#Usamos if ya que puede existir el departamento o no, con un while no podriamos mostrar el error.
#Tambien por que no necesitamos iterar para hacer lo que necesitamos (mostrar datos y comprobar que existe el departamento).
#creamos un if anidado ya que necesitamos comprobar que no hay un empleado con el número de empleado que queremos introducir
#y que existe el número de departamento que vamos a introducir.

if($row = $ifcompruebaemp ->fetch_assoc()){
	
	echo "Ya existe un empleado con el número de empleado que desea introducir.";

}else{
	
	if($row = $ifcompruebadep ->fetch_assoc()){
		
		$conecta -> query($insert);
		$ifcompruebacontar = $conecta -> query($contar);
		
		echo "Un nuevo empleado ha sido añadido.". "</br>";
		echo "\nestos son sus datos:"."</br>";
		echo "Número de empleado: ".$emp_no."</br>";
		echo "Apellido: ".$apellido."</br>";
		echo "Oficio: ".$oficio."</br>";
		echo "Direccion: ".$dir."</br>";
		echo "Salario: ".$salario."</br>";
		echo "Comision; ".$comision."</br>";
		echo "Número de departamento: ".$dept_no."</br>";
		echo "Fecha de alta: ".$fecha_alt."</br>";
		
		if($row = $ifcompruebacontar ->fetch_assoc()){
			echo "Número total de empleados: ".$row['contar'];
		}
	
	}else{
		
		echo "El número de departamento introducido no existe";
	}
}

?>
