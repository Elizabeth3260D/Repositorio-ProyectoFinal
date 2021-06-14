<?php
include "conexion.php";

	$nombre=$_POST["txtNombre"];
	$precio=$_POST['txtPrecio'];
	$codigo=$_POST['txtCodigo'];
	$descripcion=$_POST['txtDes'];
	$fecha=$_POST['txtFecha'];


	$qry=$link->prepare('INSERT INTO papeleria (Producto,Precio,Codigo_de_Barra,Descripcion,Fecha) VALUES (?,?,?,?,?)');
	$qry->execute([$nombre,$precio,$codigo,$descripcion,$fecha]);

if ($qry->rowCount()==1) {
	echo "Se agrego exitosamente!!";
	header("Location: home.php");

}

else{
	echo 'No se agrego!';
	header("Location: agregar.php");
}

?>