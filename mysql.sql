Base de datos.

-------------------------------------
drop database if exists iesalandalus2;
create database iesalandalus2;
use iesalandalus2;

CREATE TABLE `alumno` (
`idAlumno` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`Nombre` VARCHAR(20) ,
`Apellido` VARCHAR(20) ,
`Fecha_Matric` date ,
`Fecha_Titulac` date ,
`Nota` real(3,1) ,
`Poblacion` varchar(30) ,
`Telefono` char(9) ,
PRIMARY KEY (idAlumno)
);

#Álvaro Jiménez Palenzuela

INSERT INTO `alumno` VALUES ('1', 'Beatriz', 'Lara', '20150725', '20170525', '5.6', 'Alimoche – Abla – ALM', '950222222');
INSERT INTO `alumno` VALUES ('2', 'Miguel', 'Alvarez', '950222222', '20170521', '7.2', 'Salida – Guadix – GRA' , '670909090');
INSERT INTO `alumno` VALUES ('3', 'Ana', 'Delgado', '20150715', '20170525', '7.8', 'Rosal – Baza – GRA', '958909090');
INSERT INTO `alumno` VALUES ('4', 'J.Luis', 'Lopez', '20140712', '20170525', '6.9', 'Tórtola – Fiñana – ALM', '650909090');
INSERT INTO `alumno` VALUES ('5', 'Alexandra', 'Abascal', '20140722', '20170525', '9.4', 'La pera -Monachil – GRA', '989898989');
INSERT INTO `alumno` VALUES ('6', 'Benito', 'Ruiz', '20160704', '20171225', '7.0', 'Salada - Ogijares - GRA', '958242424');
INSERT INTO `alumno` VALUES ('7', 'Celia', 'Diaz', '20140728', '20170525', '6.9', 'Roma – Atarfe - GRA', '958323232');
INSERT INTO `alumno` VALUES ('8', 'Juan', 'Nuñez', '20150730', '20170525', '5.3', 'Pizzería – Almería - ALM', '950111111');
INSERT INTO `alumno` VALUES ('9', 'Desire', 'Bueno', '20140720', '20170525', '8.6', 'Retroceso - Martos - JAE,', '957000000');
INSERT INTO `alumno` VALUES ('10', 'Lute', 'Perez', '20160709', '20171225', '10.0', 'Recobeco - Ubeda - JAE', '957666666');
INSERT INTO `alumno` VALUES ('11', 'Elena', 'Ramos', '20160704', '20171225', '7.5', 'Sosa - Enix - ALM', '950565656');
INSERT INTO `alumno` VALUES ('12', 'Eva', 'Garcia', '20130728', '20170525', '6.9', 'Ruta – Nijar - ALM', '950101010');
INSERT INTO `alumno` VALUES ('13', 'Tina', 'Jimenez', '20140730', '20170525', '5.3', 'Pasteleria – Almería - ALM', '950224466');
INSERT INTO `alumno` VALUES ('14', 'Antonio', 'Alcaraz', '20140720', '20170525', '8.6', 'Adelante - Martos - JAE', '957000000');
INSERT INTO `alumno` VALUES ('15', 'Francisco', 'Blanco', '20160709', '20171225', '10', 'Torcido - Despeñaperros - JAE,', '957888888');
-------------------------------------





1.
-------------------------------------
drop procedure if exists comprobarDNI;
 
DELIMITER $$

CREATE PROCEDURE comprobarDNI (in dni char(9))

BEGIN
#Declaramos variables
DECLARE letra char(2);
DECLARE numeros char(8);
DECLARE comprueba boolean;
declare letran int(1);
declare caseletras char(2);
#tomamos el valor los números y la letra y se lo asignamos a su variable.
SET letra = (SELECT right (dni,1));
SET numeros = (SELECT left (dni,8));

#ALVARO JIMENEZ PALENZUELA.

#Asignamos valor numerico a la letra.
   IF(letra='T')THEN
   set letran = 0;
   ELSEIF (letra='R') THEN 
   set letran = 1;
   ELSEIF (letra='W') THEN 
   set letran = 2;
   ELSEIF (letra='A') THEN 
   set letran = 3;
   ELSEIF (letra='G') THEN 
   set letran = 4;
   ELSEIF (letra='M') THEN 
   set letran = 5;
   ELSEIF (letra='Y') THEN 
   set letran = 6;
   ELSEIF (letra='F') THEN 
   set letran = 7;
   ELSEIF (letra='P') THEN 
   set letran = 8;
   ELSEIF (letra='D') THEN 
   set letran = 9;
   ELSEIF (letra='X') THEN 
   set letran = 10;
   ELSEIF (letra='B') THEN 
   set letran = 11;
   ELSEIF (letra='N') THEN 
   set letran = 12;
   ELSEIF (letra='J') THEN 
   set letran = 13;
   ELSEIF (letra='Z') THEN 
   set letran = 14;
   ELSEIF (letra='S') THEN 
   set letran = 15;
   ELSEIF (letra='Q') THEN 
   set letran = 16;
   ELSEIF (letra='V') THEN 
   set letran = 17;
   ELSEIF (letra='H') THEN 
   set letran = 18;
   ELSEIF (letra='L') THEN 
   set letran = 19;
   ELSEIF (letra='C') THEN 
   set letran = 20;
   ELSEIF (letra='K') THEN 
   set letran = 21;
   ELSEIF (letra='E') THEN 
   set letran = 22;

   END IF;
   
#creamos un if anidado que compruebe que la letra coincide con el resto de la division.

IF((76635726 % 23) = letran )THEN
SET comprueba = 1;
ELSE SET comprueba = 0;

END IF;

select comprueba;


END;

$$

CALL comprobarDNI('76635726W');
-------------------------------------


2.
-------------------------------------
use iesalandalus2;

delimiter $$

#CREAMOS FUNCION COMPRUEBA SI ES PRIMO O NO 
DROP FUNCTION IF EXISTS esprimo$$
CREATE FUNCTION esprimo (numero VARCHAR(8))
    RETURNS VARCHAR(100)
BEGIN
	DECLARE divisor int;
	Declare primo int;
	set divisor = 2;
	set primo = 1;

	while((divisor<numero) && (primo=1)) do
		if (numero%divisor=0) then
		set primo = 0;
		END IF;
		set divisor= divisor+1;
		
	END WHILE;
return primo;
END; $$

#CREAMOS PROCEDIMIENTO NOS MUESTRA LOS NUMEROS NO PRIMOS
drop procedure if exists noPrimo$$

create procedure noPrimo(in valor int(20) ,out result char(30))

BEGIN
	
	declare i int;
	set i = 0;
    set result ='';
	while(valor>i) do
		if(select esprimo(i)=0) THEN
		set result =concat(result,i);
		END IF;
		set i= i+1;
	end while;

END $$

#ALVARO JIMENEZ PALENZUELA
delimiter ;


call noPrimo(27, @result);

select @result;


-------------------------------------


3.
-------------------------------------


use iesalandalus2;

DELIMITER $$

drop procedure if exists ej4$$

CREATE PROCEDURE ej4 (INOUT valor varchar(4000))
BEGIN



 DECLARE salir INTEGER DEFAULT 0;
        DECLARE cur_pob varchar(100) DEFAULT "";
 

 DEClARE notacursor CURSOR FOR 
 SELECT idAlumno FROM alumno where nota = valor;
 
 


 DECLARE CONTINUE HANDLER 
        FOR NOT FOUND SET salir = 1;

 OPEN notacursor;
 set @t1 = (SELECT count(*) from alumno where nota = valor );
set @t2 = (SELECT count(*) from alumno);
 toma_poblacion: LOOP
 
 FETCH notacursor INTO cur_pob;
 
 IF salir = 1 THEN 
 LEAVE toma_poblacion;
 END IF;

 SET valor = CONCAT(cur_pob,"\n",valor);
 
 END LOOP toma_poblacion;

 CLOSE notacursor;
 
 #ALVARO JIMENEZ PALENZUELA
  
 SET valor = CONCAT("La nota ",right(valor,3)," ha sido obtenida por ",@t1," Alumnos con identificadores ",left(valor, LENGTH(valor) - 3),"sobre un total de ",@t2," alumnos");

END$$
 
DELIMITER ;

SET @valor = 6.9;
CALL ej4(@valor);
SELECT @valor;



-------------------------------------



4.
-------------------------------------
use iesalandalus2;

DELIMITER $$

drop procedure if exists ej4$$

CREATE PROCEDURE ej4 (INOUT valor varchar(4000))
BEGIN
 
 DECLARE salir INTEGER DEFAULT 0;
        DECLARE cur_pob varchar(100) DEFAULT "";
 

 DEClARE pobcursor CURSOR FOR 
 SELECT poblacion FROM alumno;
 
 -- declare NOT FOUND handler
 DECLARE CONTINUE HANDLER 
        FOR NOT FOUND SET salir = 1;
 
 OPEN pobcursor;
 
 toma_poblacion: LOOP
 
 FETCH pobcursor INTO cur_pob;
 
 IF salir = 1 THEN 
 LEAVE toma_poblacion;
 END IF;

 SET valor = CONCAT(cur_pob,"\n",valor);
 
 END LOOP toma_poblacion;
 
 CLOSE pobcursor;
 
END$$
 
DELIMITER ;

SET @valor = "Álvaro Jiménez Palenzuela";
CALL ej4(@valor);
SELECT @valor;
-------------------------------------



5.
-------------------------------------




-------------------------------------






