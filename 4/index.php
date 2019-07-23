<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EJERCICIO 4</title>
</head>
<body>
	<?php

	$usuario = "";
	$password = "";
	$existe = false;

	$usuariosRegistrados=array("gabriela","seiddy","rogers","cap","chris");
	$passRegistrados=array("123","lemus","steve","roca","evans");

	for ($x=1; $x <= 5 ; $x++) { 
		if ($x == $usuario) {

			$indice=$usuariosRegistrados[$x];

			if ($password == $indice){
				$existe == true;
			}
		}
	}

	if ($existe == true) {
		echo "Bienvenido al usuario";
	}else{
		echo "El usuario no existe";
	}

	?>
	
</body>
</html>
 