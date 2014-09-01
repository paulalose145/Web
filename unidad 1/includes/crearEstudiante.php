<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");

	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$codigo = $_POST["codigo"];
	$correo = $_POST["correo"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "INSERT INTO Basesita.Estudiantes(`Nombre`, `Apellido`, `Codigo`, `Correo`) VALUES ('$nombre','$apellido','$codigo','$correo')";
	$resultado = mysqli_query($con,$query);

	//SE LE DA LA POSICION EN LA QUE SE LE ENCUENTRA LA TABLA
	header ('Location: http://localhost/icesi/unidad%201/estudiantes.php');
?>