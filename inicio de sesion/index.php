<!DOCTYPE html>
<html lang = "es">
<head>
	<title>Testing</title>
	<link rel="stylesheet" href="lib/libreriaB/css/bootstrap.css">
</head>
<body>
	<!--Mi primer contenedor-->
	<div class="container">
		<div class="row">
			<div class = "col-md-5">	
				<img class ="img-responsive" src="img/logo.jpg" alt = "logo">
			</div>
			<div class="col-md-7">
				<form action = "#" method = "post">
					<p>
						<br/>
						<br/>
						Nombre de usuario: <input type = "text" name ="username">
						<br/>
						<br/>
						Contrasena: <input type = "password" name ="pass">
						<input type = "submit">
					</p>
				</form>

				<?php
					$nombre = $_POST["username"];
					$password = $_POST["pass"];

					if ($nombre=="Gabriela" && $password=="123"){
						echo "Bienvenida";
					}else{
						echo "Usuario o contraseña incorrecta";
					}

				?>

		</div>
	</div>


</body>
</html>