<?php

	include_once("includes/database.php");

	$varA = "Web bitch!";
	$varB = "Yeah!";
	$varC = 5;
	echo "<h1>Soy un archivo php</h1>";
	echo "<br /> <br /><br />";

	echo $varA." ".$varB;
	echo "<br /> <br /><br />";

	echo "lalala".$varC;
	echo "<br /> <br /><br />";


	$query = "SELECT * FROM Basesita.Estudiantes";
	$resultado = mysqli_query($con,$query);

	while($row = mysqli_fetch_array($resultado)){
		echo $row["Codigo"]." ".$row["Nombre"]." ".$row["Apellido"]." ".$row["Correo"];
	}
?>