<?php
	session_start();
		if (!isset($_SESSION['nombre'])) {
			header('Location: login.php');
		}
		elseif(isset($_SESSION['nombre'])){
			require "conexion.php";
		}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Paguina de Administradores</title>
</head>
<body background="http://1.bp.blogspot.com/-undgvYIz0Pc/UAKT2iV4OiI/AAAAAAAAWQ8/TLiFZltWk20/s1600/fondos%2Bmariposas,pasteles%2B(1).jpg">
<center>
	<h1>ADMINISTRADORES</h1>
	<a href="cerrar.php">Cerrar sesion</a><br>
		<a href="registroprovedores.php">Registrar provedores</a>

<h2><strong>Productos de  Papeleria</strong></h2>
	<a href="agregar.php">Agregar nuevo</a><br><br>
	<table border="10px" bgcolor="white" >
		<tr>
			<td>Id producto</td>
			<td>Producto</td>
			<td>Precio</td>
			<td>Codigo de Barra</td>
			<td>Descripcion</td>
			<td>Fecha</td>
			<td>Editar</td>
			<td>Eliminar</td>

		</tr>
<?
	$qry=$link->prepare("SELECT * FROM papeleria");
	$qry->execute();
	$row=$qry->fetchAll(PDO::FETCH_OBJ);
	//print_r($row);

	foreach ($row as $dato){
	?>	

	<tr> <!--crear fila-->
		<td><?php echo $dato->Id_producto; ?></td> <!--llena mi primera columna-->
		<td><?php echo $dato->Producto; ?></td><!--llena mi 2 columna-->
		<td><?php echo $dato->Precio; ?></td><!--llena mi 3 columna-->
		<td><center><?php echo $dato->Codigo_de_Barra; ?></center></td><!--llena mi 4 columna-->
		<td><?php echo $dato->Descripcion; ?></td><!--llena mi 5 columna-->
		<td><?php echo $dato->Fecha; ?></td><!--llena mi 6 columna-->

		<td><a href="editar.php?id=<?php echo $dato->Id_producto ?>">Editar</a></td>
			<td><a href="eliminar.php?id=<?php echo $dato->Id_producto ?>">Eliminar</a></td>

	</tr>
	
	<?php
	}
?>



	</table></center>


</body>
</html>