<?php
	session_start ();
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");

	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$_SESSION["username"] = $_POST["correo"];
	$contr = $_POST["contrasena"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "SELECT * FROM oowl.Registro";
	$resultado = mysqli_query($con,$query);
	if($resultado == true){
		while ($row = mysqli_fetch_array($resultado)){
			if($row["Correo"] == $_SESSION["username"] AND $row["Contrasena"] == $contr){
				header ('Location: http://localhost/icesi/taller%202/www/home.php');
			}
		}
	}
?>