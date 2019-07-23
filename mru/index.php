<!DOCTYPE html>
<html>
<head>
	<title>MRU</title>
</head>
<body>
	<center>
		<form method = "post">
				<h4>
					<br>MOVIMIENTO RECTILINEO UNIFORME<br><br>
					<br>Ingrese velocidad: <input type = "number" name = "velocidad"/> m/s<br>
					<br>Ingrese distancia: <input type = "number" name = "distancia"/> m<br>
					<br>Ingrese tiempo: <input type = "number" name = "tiempo"/> s<br>
					<br><input type = "submit" name = "submit" value = "Mostrar"/><br>
				</h4>
		</form>
			<h4>
				<?php

				$v = $_POST['velocidad'];
				$d = $_POST['distancia'];
				$t = $_POST['tiempo'];

				if ($v == 0  && $d != 0 && $t != 0) {
					$v = $d/$t;

				}elseif ($d == 0  && $v != 0 && $t != 0) {
					$d = $v * $t;	

				}elseif ($t == 0  && $d != 0 && $v != 0) {
					$t = $d / $v;


				}elseif ($v == 0  && $d == 0 && $t == 0) {
					echo "<br>"."VALORES INCORRECTOS"."<br>";
					echo "INTENTALO DE NUEVO"."<br>";
				}

				echo "<br>"."<br>"."RESULTADOS"."<br>";
				echo "<br>"."Velocidad: ".$v."m/s";
				echo "<br>"."Distancia: ".$d."m";
				echo "<br>"."Tiempo: ".$t."s";
				?>
			</h4>
	</center>
	</body>
</html>