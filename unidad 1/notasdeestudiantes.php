 <?php

	//Conexión
	$host = "localhost";//Host.
	$user = "root";//Usuario.
	$pw = "";//Contrasena.
	$db = "david"; //Tú base de datos.*****
	//--------------------

	$con=mysqli_connect($host,$user,$pw)or die("problemas al conectar"); //Creo la conexión. 

	//query que saca la informacion de la tabla estudiante y se la une con la tabla de las notas de los estudiantes por medio del codigo -que es lo que tienen en comun-
	$resultado = mysqli_query($con,"SELECT Estudiantes.Nombre, Estudiantes.Apellido, Estudiantes.Codigo FROM Basesita.Estudiantes JOIN  Basesita.NotaEstudiante  ON Estudiantes.Codigo = NotaEstudiante.codigo GROUP BY NotaEstudiante.codigo");//Creo creo variable donde selecciono dos tablas con el join y utilizo el ON para igualar dos filas.
	echo "<table border = '2' style = 'width: 600px'>"; 

	//Recorro las filas con While 
	while($fila = mysqli_fetch_array($resultado)){
		//query que saca la informacion que necesito de cada tabla y la uno a la tabla de las notas de las estudiantes por medio del codigo y id que es lo que se tiene en comun con las otras dos tablas
		$resultadoD = mysqli_query($con,"SELECT Notas.nombre, Estudiantes.Codigo, NotaEstudiante.valorNota FROM Basesita.Notas JOIN  Basesita.NotaEstudiante  ON Notas.id = NotaEstudiante.id JOIN Basesita.Estudiantes ON Estudiantes.Codigo = NotaEstudiante.codigo");
		echo "<tr><td>".$fila["Nombre"]." ".$fila["Apellido"]."</td>";

		//recorro la infomacion del ultimo query y ordenos los datos que recibi en un tabla
		while($filaD = mysqli_fetch_array($resultadoD)){
			if($fila["Codigo"] == $filaD["Codigo"]){
				echo "<td>".$filaD["nombre"]."</td>";
				echo "<td>".$filaD["valorNota"]."</td>";
			}
		}
	echo"</tr>";
	}

	echo "</table>";
	//-------------------------------------
?>