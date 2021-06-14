<?php

require "conexion.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$fecha=$_POST['fecha'];

$encrip=password_hash($pass, PASSWORD_DEFAULT);

$qry=$link->prepare("INSERT INTO usuarios_registrados (Nombre,Apellido,Email,Contraseña,Fecha_registro) VALUES (?,?,?,?,?)");
$qry->execute([$nombre,$apellido,$correo,$encrip,$fecha]);



if ($qry->rowCount()==0) {
	echo "Registro fallo!";
}
	else if($qry->rowCount()==1){
		echo "Se registro exitosamente!";
	}
	else{
		echo "Error de sistema";
	}

?>
