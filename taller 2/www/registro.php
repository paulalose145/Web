<!DOCTYPE html>
<?php
	session_start ();
?>
<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="css/styles.css" />
		<meta charset="utf-8">
		<meta name= "viewport" content="width=device-width">
	</head>
	<body>
		<header id='cabecera1'>
			<figure>
				<img src= "img/buho.png"> 
			</figure>
			<h1>-OOWL-</h1>
			<form action = "includes/login.php" method = "POST">
				<input type="text" name="correo" value="correo">
				<input type="text" name="contrasena" value="contraseña">
				<input type="submit" value="iniciar sesión">
			</form>
		</header>

		<section id='registro'>
			<figure>
				<img id='buho' src= "img/buhoG.png">
			</figure>
			<h1>-OOWL-</h1>
			<hr>
			<hr>
			<form action = "includes/crearRegistro.php" method = "POST">
				<input type="text" name="nombre" value="nombre">
				<input type="text" name="correo" value="correo">
				<input type="text" name="contrasena" value="contraseña">
				<input type="submit" value="registrar">
			</form>
		</section>
	</body>
</html>