<html>
<head>
	<title> Registro </title>
	<meta charset = "utf-8">
</head>

<body>
	<section> 
		<h1>Registrate</h1>
		<form action = "includes/crearUsuario.php" method = "POST">
			<label>Nombre</label><input type = "text" name = "nombre" id = "nombre"><br>
			<label>Apellido</label><input type = "text" name = "apellido" id = "apellido"><br>
			<label>Correo</label><input type = "text" name = "correo" id = "correo"><br>
			<label>Contraseña</label><input type = "text" name = "contrasena" id = "contrasena"><br>
			<br>
			<input type = "submit" value = "Enviar">
		</form>
	</section>
</body>
</html>