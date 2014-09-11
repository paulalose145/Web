<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");

	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$nombre = $_POST["nombre"];
	$creacion = $_POST["fechaCreacion"];
	$finalizacion = $_POST["fechaFinalizacion"];
	$prioridad = $_POST["prioridad"];
	$correo = $_POST["correo"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "INSERT INTO Asignacion_de_Tareas.Tareas(`Nombre`, `Creacion`, `Finalizacion`, `Prioridad`, `Correo`) VALUES ('$nombre','$creacion','$finalizacion','$prioridad', '$correo')";
	echo $query;
	$resultado = mysqli_query($con,$query);

	//SE LE DA LA POSICION EN LA QUE SE LE ENCUENTRA LA TABLA
	header ('Location: http://localhost/icesi/taller%201/www/misTareas.php?cor="$correo"');
?>