<?php
	///$pdo
	$link = new PDO('mysql:host=localhost;port=3306;dbname=segundabasededatos','root','mysql');

	///See the "errors" folder for details...
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	///Check connection
	if ($link->connect_error) {

		die("Connection failed: " . $link->connect_error);

	}

	else{
		//echo "<h1>Conexion Exitosa!!!</h1>";
	}

?>