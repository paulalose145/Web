<!DOCTYPE html>
<?php
	session_start ();
?>
<html>
	<head>
		<title>Perfil</title>
		<link rel="stylesheet" href="css/styles.css" />
		<meta charset="utf-8">
		<meta name= "viewport" content="width=device-width">
	</head>
	<body>
		<header id='cabecera1'>
			<figure>
				<img src= "img/buho.png"> 
			</figure>
			<h1>-OOWL-</h1>
			<nav>
				<ul>
					<a href="home.php"><li class="linea">Home</li></a>
					<a href="catalogo.php"><li class="linea">Catálogo</li></a>
					<a href="perfil.php"><li>Perfil</li></a>
				</ul>
			</nav>
		</header>

		<section id='barra'>
			<h3>PERFIL</h3>
			<a href="includes/salir.php"><input type="submit" value="salir"></a>
		</section>
		<section id='nombre'>
			<?php
				include_once("includes/database.php");
				$query = "SELECT * FROM oowl.Registro  WHERE Registro.Correo = '".$_SESSION['username']."'";
				$resultado = mysqli_query($con,$query);
				while ($row = mysqli_fetch_array($resultado)){
					echo "<h4>".$row['Nombre']."</h4>";	
				}
			?>	
			<hr>
			<hr>		
		</section>
		<section id='comprado'>
			<?php
				//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
				include_once("includes/database.php");
				//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
				$query = "SELECT * FROM oowl.Compra WHERE Compra.Nombre ='".$_SESSION['username']."'";				
				$resultado = mysqli_query($con,$query);
				while ($row = mysqli_fetch_array($resultado)){
					echo "<article id='productoCom'>";
					echo "<img src=img/".$row['Imagen']."> ";
					echo "<hr>";
					echo "<hr>";
					echo "<h4>".$row['NombreImg']."</h4>";
					echo "<h4 id='precio'>".$row['Precio']."</h4>";
					echo "<h4 id='fecha'>".$row['Fecha']."</h4>";
					echo "</article>";
				}
			?>			
		</section>>
	</body>
</html>