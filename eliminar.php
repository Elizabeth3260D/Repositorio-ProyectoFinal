<?php

$id= $_GET['id'];
	include 'conexion.php';
	$qry= $link->prepare('DELETE FROM papeleria WHERE Id_producto=?;');
	 $qry->execute([$id]);

	if ($qry->rowCount()==1) {
		echo "Se elimino exitosamente!";

		header("Location: home.php");
	}

	else{
		echo "Fallo la eliminacion!";

	header("Location: home.php");
	}
?>