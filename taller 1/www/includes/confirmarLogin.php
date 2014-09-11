<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("database.php");

	//SE GUARDA EN VARIABLES LO QUE SE RECIBE DEL FORMULARIO
	$cor = $_POST["correo"];
	$contr = $_POST["contrasena"];

	//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
	$query = "SELECT Usuarios.Correo, Usuarios.Contrasena FROM Asignacion_de_Tareas.Usuarios";
	$resultado = mysqli_query($con,$query);
	echo $query;
	if($resultado == true){
		echo "hola";
		while ($row = mysqli_fetch_array($resultado)){
			echo "while";
			if($row["Correo"] == $cor AND $row["Contrasena"] == $contr){
				echo "fvf";
				header ('Location: http://localhost/icesi/taller%201/www/Tarea.php?Correo='.$cor);
			}
		}
	}
?>