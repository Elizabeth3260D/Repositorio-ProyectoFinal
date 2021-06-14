<!DOCTYPE html>
<html>
<head>
	<title>Agregar nuevo producto</title>
</head>
<body background="https://image.freepik.com/foto-gratis/utiles-escolares-papeleria-sobre-fondo-rosa_107592-209.jpg">
	<center>

		<h1 style="color:purple">Agregar un nuevo producto</h1>
		<form method="POST" action="agregarproceso.php">
			
			<label for="txtNombre"><strong>Nombre del producto: </strong></label>
			<input type="text" name="txtNombre" id="txtNombre"><br>

			<label for="txPrecio"><strong>Precio: </strong></label>
			<input type="text" name="txtPrecio" id="txtPrecio"><br>

			<label for="txtCodigo"><strong>Codigo de Barra: </strong></label>
			<input type="text" name="txtCodigo" id="txtCodigo"><br>

			<label for="txtDes"><strong>Descripcion: </strong></label>
			<input type="text" name="txtDes" id="txtDes" placeholder=""><br>

			<label for="txtFecha"><strong>Fecha: </strong></label>
			<input type="text" name="txtFecha" id="txtFecha" placeholder="AAAA-MM-DD"><br><br>

			<input type="submit" value="Agregar"><br><br>
			<input type="reset" name="">

		</form>
	</center>

</body>
</html>