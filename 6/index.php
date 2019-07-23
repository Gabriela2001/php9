<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<?php
	$num = array(1,2,3,4,5,6,7,8,9,10);

	function contar($arr){
		$contador = 0;
		foreach($arr as $value){
			echo $value;
			for ($x = 0; $x <= 10; $x++){
				$contador = $contador+1;
				echo "El numero es ".$contador."<br>";
			}
		}

	}
	

	function suma($arr){
		$x = 0;
		foreach($arr as $value){
			$x = $x+$value;
			echo "<br>".$x;
		}
	}


	function menor($arr){
		$x = 1;
		foreach($arr as $value){
			if ($x < $value) {
				$x = $value;
			}		
		}
		echo "<br><br>";
		echo min($arr);
		echo "<br>".$x;
	}



	function mayor($arr){
		echo "<br><br>";
		echo max($arr);
	}


	function sumavalores($arr){
		echo "<br><br>";
		echo array_sum($arr);
	}


	function promedio($arr){
		echo "<br><br>";
		echo array_sum($arr) / 10;
	}



	contar($num);
	suma($num);
	menor($num);
	mayor($num);
	
	echo "<br><br>************************************";
	echo "<br>FUNCIONES<br><br>";
	echo "El numero menor es ";
	menor($num);
	echo "<br><br>El numero mayor es ";
	mayor($num);
	echo "<br><br>La suma de todos los valores es ";
	sumavalores($num);
	echo "<br><br>El promedio de los valores es ";
	promedio($num);
	echo "<br><br>".date('d/m/o, H:i:s');


	?>

</body>
</html>