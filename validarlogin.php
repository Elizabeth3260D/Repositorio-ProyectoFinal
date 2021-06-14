<?php
session_start();
require 'conexion.php'; //requiere del archivo conexion.php

$correo=$_POST['correo'];
$pass=$_POST['pass'];

$qry= $link->prepare('SELECT * FROM usuarios_registrados WHERE Email=?');
$qry-> execute([$correo]);
 

$row=$qry->fetch(PDO::FETCH_OBJ); // lo que me devuelve el qry me lo devuelve y me lo guarda en un objeto
//print_r($row);


	if(password_verify($pass, $row->Contraseña)) {
    //echo '¡La contraseña es válida!';
		$_SESSION['nombre']=$row->Nombre;
		$_SESSION['usuario']=$row->Id_tipousuario;

		switch ($_SESSION['usuario']) {
			
			case 1:
				header('Location:administrador.php');
			break;

			case 2:
				header('Location:home.php');
			break;

			case 3:
				header('Location:provedor.php');
			break;

			default:
				header('Location:login.php');
		}
  

	} 
	else {
    	//echo 'La contraseña no es válida.';
    	header('Location: login.php');
	}

   

?>