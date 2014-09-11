<html>
<head>
	<title> Nueva Tarea </title>
	<meta charset = "utf-8">
</head>

<body>
	<section> 
		<h1>Nueva Tarea</h1>
		<?php
		$usuario = $_GET["Correo"];
		echo '<h4>Crea una nueva tarea o <a href="http://localhost/icesi/taller%201/www/misTareas.php?cor='.$usuario.'"> mira tu lista de tareas</a></h4>';
		?>
		<form action = "includes/crearTarea.php" method = "POST">
			<label>Nombre</label><input type = "text" name = "nombre" id = "nombre"><br>
			<label>Creacion</label><input type="date" name="fechaCreacion"><br>
			<label>Finalizacion</label><input type="date" name="fechaFinalizacion"><br><br>
			<label>Prioridad</label><input type = "text" name = "prioridad" id = "prioridad"><br>
			<label>Correo</label><input type = "text" name = "correo" id = "correo"><br>
			<br>
			<input type = "submit" value = "Enviar">
		</form>
	</section>
</body>
</html>