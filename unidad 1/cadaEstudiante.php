<?php
	//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
	include_once("includes/database.php");
	$Codigo = $_GET['codigo'];

	//SE CREA EL QUERY QUE VA A ESCOGER LAS NOTAS DEL CODIGO SELECCIONADO EN LA TABLA DE ESTUDIANTES
	$resultado = mysqli_query($con,"SELECT NotaEstudiante.Codigo, NotaEstudiante.id, NotaEstudiante.valorNota FROM Basesita.Estudiantes JOIN Basesita.NotaEstudiante ON Estudiantes.Codigo = NotaEstudiante.codigo WHERE Estudiantes.Codigo='$Codigo'");
	echo "<table border = '2' style = 'width: 400px'>"; 
	
		//SE ORDENA EN UN ARREGLO Y SE RECORRE LA INFORMACION QUE EL QUERY RECIBIO - DESPUES SE MUESTRA EN LA WEB LA INFORMACION
		while($row = mysqli_fetch_array($resultado)){
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$Codigo."</td>";
			echo "<td>".$row["valorNota"]."</td>";
			echo"</tr>";
		}		
	echo "</table>";
?>