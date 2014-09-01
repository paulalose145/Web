<html>
<head>
	<title> Notas de Estudiante </title>
	<meta charset = "utf-8">
</head>

<body>
<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	echo "<h1>Listado de Estudiantes</h1>";
	include_once("includes/database.php");

	//QUERY QUE SACA TODA LA INFORMACION DE LA TABLA NOTAS
	$query = "SELECT * FROM Basesita.Estudiantes";
	$resultado = mysqli_query($con,$query);

	//SE RECORRE LA INFORMACION OBTENIDA Y SE LA MUESTRA EN EL NAVEGADOR
	while($row = mysqli_fetch_array($resultado)){
		echo "<a href='cadaEstudiante.php?codigo=".$row["Codigo"]."'>".$row["Codigo"]."</a>";
		echo " ".$row["Nombre"]." ".$row["Apellido"]." ".$row["Correo"];
		echo "<br /> <br />";
	}
?>
	<!--SE CREA EL FORMULARIO PARA AÑADIR REGISTROS A LA TABALA-->
	<section> 
		<form action = "includes/crearEstudiante.php" method = "POST">
			<label>Nombre</label><input type = "text" name = "nombre" id = "nombre">
			<label>Apellido</label><input type = "text" name = "apellido" id = "apellido">
			<label>Codigo</label><input type = "text" name = "codigo" id = "codigo">
			<label>Correo</label><input type = "text" name = "correo" id = "correo">
			<br><br>
			<input type = "submit" value = "Enviar">
		</form>
	</section>
</body>
</html>