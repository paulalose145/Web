<html>
<head>
	<title> Tus tareas </title>
	<meta charset = "utf-8">
</head>

<body>
	<?php
		include_once("includes/database.php");
		$usuario = $_GET["cor"];
		$query = "SELECT * FROM Asignacion_de_Tareas.Usuarios JOIN Asignacion_de_Tareas.Tareas ON Usuarios.Correo = Tareas.Correo ORDER BY Tareas.Prioridad";
		$resultado = mysqli_query($con,$query);
		echo "<table border = '2' style = 'width: 600px'>";
		echo"<th> Nombre </th>";
		echo"<th> Creacion </th>";
		echo"<th> Finalizacion </th>";
		echo"<th> Prioridad </th>";
		echo"<th> Correo </th>";

		while($row = mysqli_fetch_array($resultado)){
			if($usuario == $row["Correo"]){
			echo "<tr><td>".$row["Nombre"]."</td><td>".$row["Creacion"]."</td><td>".$row["Finalizacion"]."</td><td>".$row["Prioridad"]."</td><td>".$row["Correo"]."</td>";
			}
		}
		echo "</table>";

		$queryD = "SELECT * FROM Asignacion_de_Tareas.Usuarios";
		$resultadoD = mysqli_query($con,$queryD);
		while($rowD = mysqli_fetch_array($resultadoD)){
			echo "<a href = 'misTareas.php?cor=".$rowD['Correo']."'>".$rowD['Correo']."</a><br>";
		}
	?>

</body>
</html>