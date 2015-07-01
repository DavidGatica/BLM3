<?php
	session_start();

	if (!isset($_SESSION['usuarioc'])) 
	{
		header('Location: index.php');
	}

	include ("funciones_mysql.php");

	$conexion = conectar();

	$id_catalogo = $_POST['id_catalogo'];
	$unidad = $_POST['unidad'];
	$descripcion = $_POST['descripcion'];

	$sql = "UPDATE `Catalogo` SET `unidad`='$unidad',`descripcion`= '$descripcion' WHERE `id_catalogo`='$id_catalogo'";
	$resultado = query($sql, $conexion);
	
	header("Location: index.php?sec=cambio_p&cambio=si")
?>