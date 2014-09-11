<html>
<head>
	<title> Login </title>
	<meta charset = "utf-8">
</head>

<body>
	<section> 
		<h1>Inicia Sesión</h1>
		<form action = "includes/confirmarLogin.php" method = "POST">
			<label>Correo</label><input type = "text" name = "correo" id = "correo"><br>
			<label>Contraseña</label><input type = "text" name = "contrasena" id = "contrasena"><br>
			<br>
			<input type = "submit" value = "Iniciar Sesión">
		</form>
	</section>
</body>
</html>