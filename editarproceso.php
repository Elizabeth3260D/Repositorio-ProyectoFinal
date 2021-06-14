<?php
require "conexion.php";
	
	$id=$_POST["txtId_producto"];
	$nombre=$_POST["txtNombre"];
	$precio=$_POST['txtPrecio'];
	$codigo=$_POST['txtCodigo'];
	$descripcion=$_POST['txtDes'];
	$fecha=$_POST['txtFecha'];


$qry=$link->prepare('UPDATE papeleria SET Producto=?,Precio=?,Codigo_de_Barra=?,Descripcion=?,Fecha=? WHERE Id_producto=?');
$qry->execute([$nombre,$precio,$codigo,$descripcion,$fecha,$id]);

	if ($qry->rowCount()==1) {
		header("Location: home.php");
}

else{
	echo "Error en la actualizacion de datos!";
	header("Location: editar.php");
}

?>