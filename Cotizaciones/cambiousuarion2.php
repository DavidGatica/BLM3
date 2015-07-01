<?php
	session_start();

	//incluimos el archivo con las funciones
	include ("funciones_mysql.php");

	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellido_p = $_POST['apellido_p'];
	$apellido_m = $_POST['apellido_m'];
	$e_mail = $_POST['e_mail'];
	$permiso = $_POST['permiso'];
	$password = $_POST['password'];

	//Funcion que conecta la base de datos
	$conexion = conectar();

	$sql = "SELECT * FROM Usuarios WHERE id_usuario = '$usuario'";
	$resultado = query($sql, $conexion);
	while ($campo = mysql_fetch_array($resultado)) 
	{
		$no_usuario = $campo['no_usuario'];
	}
	//Actualizar la tabla Usuarios
	$sql3 = "UPDATE Usuarios SET id_usuario = '$usuario', permiso = '$permiso', apellido_p = '$apellido_p', apellido_m = '$apellido_m', e_mail = '$e_mail', numero = '$numero', telefono1 = '$telefono1', telefono2 = '$telefono2' WHERE `no_usuario`='$no_usuario'";
	$resultado3 = query($sql3, $conexion);

	$sql2 = "UPDATE Log_In SET id_usuario = '$usuario', password='$password' WHERE `no_usuario`='$no_usuario'";
	$resultado2 = query($sql2, $conexion);
	
	header("Location: index.php?sec=cambious&cambio=hecho");
?>























