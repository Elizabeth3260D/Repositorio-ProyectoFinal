<?php

require "conexion.php";

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$correo=$_POST['txtEmail'];
$pass=$_POST['txtPass'];
$fecha=$_POST['txtFecha'];
$idRol=$_POST['txtidRol'];

$encrip=password_hash($pass,PASSWORD_DEFAULT);

$qry=$link->prepare("INSERT INTO usuarios_registrados (Nombre,Apellido,Email,Contraseña,Fecha_registro,Id_tipousuario) VALUES (?,?,?,?,?,?)");
$qry->execute([$nombre,$apellido,$correo,$encrip,$fecha,$idRol]);



if ($qry->rowCount()==0) {
	echo "Registro fallo!";
}
	else if($qry->rowCount()==1){
		echo "Se registro al provedor exitosamente!";
	}
	else{
		echo "Error de sistema";
	}

?>