<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	echo "<h1>Listado de Notas</h1>";
	include_once("includes/database.php");

	//QUERY QUE SACA TODA LA INFORMACION DE LA TABLA NOTAS
	$query = "SELECT * FROM Basesita.Notas";
	$resultado = mysqli_query($con,$query);

	//SE RECORRE LA INFORMACION OBTENIDA Y SE LA MUESTRA EN EL NAVEGADOR
	while($row = mysqli_fetch_array($resultado)){
		echo $row["id"]." ".$row["porcentaje"]." ".$row["nombre"];
		echo "<br /> <br />";
	}
	?>