<!DOCTYPE html>
<?php
	session_start ();
?>
<html>
	<head>
		<title>Catálogo</title>
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
			<h3>CATÁLOGO</h3>
			<a href="includes/salir.php"><input type="submit" value="salir"></a>
		</section>
		<section id= 'productos'>
			<?php
				//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
				include_once("includes/database.php");
				//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
				$query = "SELECT * FROM oowl.Producto";
				$resultado = mysqli_query($con,$query);
				while ($row = mysqli_fetch_array($resultado)){
					echo "<article id='producto'>";
					echo "<img src=img/".$row['Imagen']."> ";
					echo "<hr>";
					echo "<hr>";
					echo "<h4>".$row['NombreImg']."</h4>";
					echo "<a href='includes/crearCarrito.php?nombre=".$_SESSION['username']."&imagen=".$row['Imagen']."&nombreImg=".$row['NombreImg']."&precio=".$row['Precio']."'><img id= 'carro' src= 'img/carrito.png'></a>";
					echo "<h4 id='precio'>".$row['Precio']."</h4>";
					echo "</article>";
				}
			?>
		</section>
		<section id='carrito'>
			<h3>CARRITO</h3>
			<div id='cuadrito'>
				<?php
				//SE INCLUYE LA INFORMACION DE LA BASE DE DATOS
				include_once("includes/database.php");
				//SE AÑADE LA INFROMACION DE CADA VARIABLE A LA TABLA DE LA BASE DE DATOS POR MEDIO DE UN INSERT
				$query = "SELECT * FROM oowl.Carrito WHERE Carrito.Nombre ='".$_SESSION['username']."'";
				$resultado = mysqli_query($con,$query);
				while ($row = mysqli_fetch_array($resultado)){
					echo "<article id='productoCar'>";
					echo "<img src=img/".$row['Imagen']."> ";
					echo "<hr>";
					echo "<hr>";
					echo "<h6>".$row['NombreImg']."</h6>";
					echo "<h6 id='precio'>".$row['Precio']."</h6>";
					echo "<a href='includes/crearCompra.php?nombre=".$_SESSION['username']."&imagen=".$row['Imagen']."&nombreImg=".$row['NombreImg']."&precio=".$row['Precio']."'><input type='submit' value='comprar'></a>";
					echo "</article>";
				}
				?>
			</div>
		</section>
	</body>
</html>