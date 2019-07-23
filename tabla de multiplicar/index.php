<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>GABRIELA</title>
	<link rel="icon" href="https://www.spreadshirt.es/image-server/v1/mp/designs/15163315,width=178,height=178/letra-g-en-el-look-grunge.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>TABLAS DE MULTIPLICAR</h1>
	<form action = "#" method = "post">
		<h4>
			Escribe un numero : <input type = "number" name = "numero"/>
			<input type= "submit" name = "submit" value = "Mostrar"/>
		</h4>
	</form>

	<h4>
	<ul>	
	<?php

	$num = $_POST['numero'];


	for ($tabla = 1; $tabla <= 10; $tabla++){
	
	echo "<li>".$num." x ".$tabla." = ".$num*$tabla."</li>";
	}
	
	?>

	</ul>
	</h4>

</body>
</html>