<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");
	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$nombre = $_GET["nombre"];
	$imagen = $_GET["imagen"];
	$nombreImg = $_GET["nombreImg"];
	$precio = $_GET["precio"];
	$fecha = $_GET["fecha"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "INSERT INTO oowl.Compra(`Nombre`, `Imagen`, `NombreImg`, `Precio`, `Fecha`) VALUES ('$nombre','$imagen','$nombreImg', '$precio', '$fecha')";
	$resultado = mysqli_query($con,$query);
	
	//SE LE DA LA POSICION EN LA QUE SE LE ENCUENTRA LA TABLA
	header ('Location: http://localhost/icesi/taller%202/www/catalogo.php');
?>