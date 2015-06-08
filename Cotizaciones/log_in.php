<?php
session_start();
if (!isset($_GET['op']))
    $op = NULL;
else
    $op = $_GET['op'];
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();
$no_version = 1;

$sql = "SELECT version FROM Version WHERE version_no='$no_version'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) {
    $version = $campo['version'];
}
?>
<!DOCTYPE html >
<html>
<head>
    <title>Consecutivo de cotizaciones</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
</head>

<body>
	<div id="contenido">Hola
	</div>
</body>
</html>
