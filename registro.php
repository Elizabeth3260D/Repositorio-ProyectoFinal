<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body background="https://static3.depositphotos.com/1000820/242/i/600/depositphotos_2429425-stock-photo-pastel-background.jpg">

<center>
	<h1>Registrate</h1>

	<form action="validacionregistro.php" method="POST">
	
		<center>
		<label for="nombre"><strong>Nombre: </strong></label>
 		<input type="text" name="nombre" id="nombre"><br>

 		<label for="apellido"><strong>Apellido: </strong></label>
 		<input type="text" name="apellido" id="apellido"><br>

 		<label for="correo"><strong>Correo: </strong></label>
 		<input type="email" name="correo" id="correo"><br>

 		<label for="pass"><strong>Contraseña: </strong></label>
 		<input type="password" name="pass" id="pass"><br>

 		<label for="fecha"><strong>Fecha: </strong></label>
 		<input type="text" name="fecha" id="fecha" placeholder="AAAA-MM-DD"><br><br>

 		<input type="submit" value="Registrate">	
 		</center>

	</form>

</center>

</body>
</html>