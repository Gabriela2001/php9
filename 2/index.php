<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EJERCICIO2</title>
</head>
<body>
	<?php

	$uno = 1;
	$fin = 31;
	$semana = 1;


	while ($uno <= $fin){
		for($contador = 1; $contador <= $semana*7; $contador++){
			if ($uno <= $fin){
				if ($contador == 1){
					echo "Hola";
				}
			}
		}

	}

	?>
	
</body>
</html>
