<?php

require "conexion.php";

$nombre=$_POST['txtNombre'];
$PriApellido=$_POST['txtPriApellido'];
$SegApellido=$_POST['txtSegApellido'];
$direccion=$_POST['txtDireccion'];
$telefono=$_POST['txtTelefono'];
$email=$_POST['txtEmail'];
$fecha=$_POST['txtFecha'];

//$encrip=password_hash($pass,PASSWORD_DEFAULT);

$qry=$link->prepare("INSERT INTO registro_provedores (Nombre,Primer_apellido,Segundo_apellido,Direccion,Telefono_cel,Correo,Fecha_solicitud) VALUES (?,?,?,?,?,?,?)");
$qry->execute([$nombre,$PriApellido,$SegApellido,$direccion,$telefono,$email,$fecha]);



if ($qry->rowCount()==0) {
	echo "Registro fallo!";
}
	else if($qry->rowCount()==1){
		echo "Sus datos han sido REGISTRADOS EXITOSAMENTE!";
		echo "<br>";
		echo "En el transcurso de 48 hora le enviaremos un sms para avisarle si su solicitud fue aprovada." . "<br>" ."Si asi lo es le enviaremos un password para que con el y el correo que usted registro pueda ingresar....";
		echo "<br>";
		echo "Para mas informacion Tel: (656) 597 14 148";
	}
	else{
		echo "Error de sistema";
	}

?>
