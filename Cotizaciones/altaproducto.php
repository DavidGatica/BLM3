<?php
	session_start();
	
	if (!isset($_SESSION['usuario'])) 
	{
		header('Location: index.php');
	}	
	
	include ("funciones_mysql.php");
	
	$conexion = conectar();
	
	$id_catalogo = $_POST['catalogo'];
	$unidad = $_POST['unidad'];
	$descripcion = $_POST['descripcion'];

	$sql = "INSERT INTO Catalogo (id_catalogo, unidad, descripcion, activo) VALUES ('$id_catalogo','$unidad','$descripcion','1')";
	$resultado = query($sql, $conexion);
	
	header('Location: index.php?sec=alta_p&producto=agregado');
?>

