
<!DOCTYPE html>
<html>
<head>
	<title>Registro de provedores</title>
</head>
<body background="https://ideakreativa.net/wp-content/uploads/2018/10/photo-1531736275454-adc48d0.jpg">

<center>
	<h1 style="color:blue">Registro de provedores</h1>
	<form action="validarRegistroprovedores.php" method="POST">

		<label for="txtNombre"><strong>Nombre: </strong></label>
		<input type="text" name="txtNombre" id="txtNombe"><br>

		<label for="txtApellido"><strong>Apellido: </strong></label>
		<input type="text" name="txtApellido" id="txtApellido"><br>

		<label for="txtEmail"><strong>Email: </strong></label>
		<input type="email" name="txtEmail" id="txtEmail"><br>

		<label for="txtPass"><strong>Password: </strong></label>
		<input type="password" name="txtPass" id="txtPass"><br>

		<label for="txtFecha"><strong>Fecha de Registro: </strong></label>
		<input type="txt" name="txtFecha" id="txtFecha"><br>

		<label for="txtidRol"><strong>Id Rol: </strong></label>
		<input type="txt" name="txtidRol" id="txtidRol"><br><br>

		<input type="submit" value="Registrar" value=""><br>

	</form>
</center>
</body>
</html>