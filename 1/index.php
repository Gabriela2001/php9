<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EJERCICIO 1</title>
</head>
<body>
	<?php

	$principio = "El valor que contiene es: ";
	$esp = "</br>";


	$numb1 = 1;
	$numb2 = 2;
	$numb10 = 10;
	$nomb1 = "Cipsa";
	$nomb2 = "Barcelona";
	$txt1 = "23";
	$txt2 = "en";

	$multiplicacion = $numb1*$numb2*$numb10;
	echo $esp.$multiplicacion;
	$textos = $nomb1.$nomb2.$txt1.$txt2;
	echo $esp.$esp.$textos;
	$suma = $numb1+$numb2+$numb10;

	echo $esp.$esp."VALORES DE LAS VARIABLES";
	echo $esp.$principio.$numb1;
	echo $esp.$principio.$numb2;
	echo $esp.$principio.$numb10;
	echo $esp.$principio.$nomb1;
	echo $esp.$principio.$nomb2;
	echo $esp.$principio.$txt1;
	echo $esp.$principio.$txt2;

	echo $esp.$esp."OPERACIONES CON LAS VARIABLES";
	echo $esp."La suma de las variables numericas es: ".$suma;
	echo $esp.$nomb1." se encuentra en ".$nomb2;
	echo $esp."La multiplicacion de las variables numericas entre sí es: ".$multiplicacion;
	echo $esp."Los textos concatenados son: ".$textos;

	?>
	
</body>
</html>
