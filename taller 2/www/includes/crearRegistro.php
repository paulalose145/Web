<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");
	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "INSERT INTO oowl.Registro(`Nombre`, `Correo`, `Contrasena`) VALUES ('$nombre','$correo','$contrasena')";
	$resultado = mysqli_query($con,$query);

	//SE LE DA LA POSICION EN LA QUE SE LE ENCUENTRA LA TABLA
	header ('Location: http://localhost/icesi/taller%202/www/registro.php');
?>