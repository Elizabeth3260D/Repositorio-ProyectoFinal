<?php
require "conexion.php";

$id=$_GET["id"];

	
	$qry = $link->prepare("SELECT * FROM papeleria WHERE Id_producto=?");
	$qry->execute([$id]);
	$row=$qry->fetch(PDO::FETCH_OBJ);
	//print_r($qry);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body background="https://img.freepik.com/foto-gratis/flores-color-rosa-rosa_24837-301.jpg?size=626&ext=jpg">

<center>
	<h1>Editar</h1>
	<form method="POST" action="editarproceso.php">

		<!--<label for="txtId_producto">Id_producto: </label>-->
		<input type="hidden" name="txtId_producto" value=" <?php echo $row->Id_producto ?>"><br>

		<label for="txtNombre"><strong>Nombre del producto: </strong></label>
		<input type="text" name="txtNombre" id="txtNombre" value=" <?php echo $row->Producto ?>"><br>

		<label for="txtPrecio"><strong>Precio: </strong></label>
		<input type="text" name="txtPrecio" id="txtPrecio" value=" <?php echo $row->Precio ?>"><br>

		<label for="txtCodigo"><strong>Codigo de Barra: </strong></label>
		<input type="text" name="txtCodigo" id="txtCodigo" value=" <?php echo $row->Codigo_de_Barra ?>"><br>

		<label for="txtDes"><strong>Descripcion: </strong></label>
		<input type="text" name="txtDes" id="txtDes" value=" <?php echo $row->Descripcion ?>"><br>

		<label for="txtFecha"><strong>Fecha: </strong></label>
		<input type="text" name="txtFecha" id="txtFecha" value="<?php echo $row->Fecha ?>"><br>

		<input type="submit" value="Editar" value=""><br>
	</form>
</center>

</body>
</html>