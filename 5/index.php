<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
</head>
<body>
		<p>
			<?php	
			$texto="La palabra estudiante es un sustantivo masculino que se refiere al educando o
			alumno dentro del ámbito académico, que estudia como su ocupación principal.";
			$esp="</br>";
			$conteo= "La letra a, aparece ";
			$posicion= "La palabra refiere, comienza en la posicion: ";
			echo strtoupper ($texto);
			echo $esp;
			echo $esp;
			echo strtolower($texto);
			echo $esp;
			echo $esp;
			echo str_replace("a", "á", $texto);
			echo $esp;
			echo $esp;
			echo $conteo;
			echo substr_count($texto, "a");
			echo " veces en el texto ";
			echo $esp;
			echo $esp;
			echo $posicion;
			echo strpos($texto, "refiere");
			echo $esp;
			echo $esp;
			echo ucwords($texto);
			echo $esp;
			echo $esp;
			echo str_replace("masculino", "femenino", $texto);

?> 
</body>
</html>
