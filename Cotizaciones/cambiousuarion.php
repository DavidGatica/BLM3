<?php
$nombre = $_GET['nombreCambio'];


//Obtener Datos de la empresa a cambiar "tabla clientes"
$sql = "SELECT * FROM Usuarios WHERE nombre = '$nombre'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) 
{
    $id_usuario = $campo['id_usuario'];
    $permiso = $campo['permiso'];
    $nombre = $campo['nombre'];
    $apellido_p = $campo['apellido_p'];
    $apellido_m = $campo['apellido_m'];
    $e_mail = $campo['e_mail'];
}

//Obtener Datos de la empresa a cambiar "tabla clientes"
$sql = "SELECT password FROM `Log_in` WHERE `id_usuario` = '$id_usuario'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) {
    $password = $campo['password'];
}
?>

<!DOCTYPE html >
<html>
    <body>
        <div id="contenido">
            <div id="contenidoCont">
				<div class="centrar">

					<div id="titulo2">Modifique los apartados del usuario:</div>

					<form action="cambiousuarion2.php" method="POST">

							<input placeholder="Nombre de Usuario" type="text" class="inputChico"  name="usuario" value="<?php echo$id_usuario; ?>" autofocus  >

							<input placeholder="Nombre" type="text" class="inputChico"  name="nombre" value="<?php echo$nombre; ?>" autofocus required>

							<input placeholder="Apellido paterno" type="text" class="inputChico"  name="apellido_p" value="<?php echo$apellido_p; ?>" autofocus required>

							<input placeholder="Apellido materno" type="text" class="inputChico"  name="apellido_m" value="<?php echo$apellido_m; ?>" autofocus >

							<input placeholder="E-mail" type="text" class="inputChico"  name="e_mail" value="<?php echo$e_mail; ?>" autofocus>

							<input placeholder="Permisos" type="text" class="inputChico"  name="permiso" value="<?php echo$permiso; ?>" autofocus required>

							<input placeholder="Password" type="text" class="inputChico"  name="password" value="<?php echo$password; ?>" autofocus required>


					<input type="submit" value="MODIFICAR!" class="botonChico">

					</form>

					<a href="administracion.php"><button class="botonChico"><div id="cambio">CANCELAR</div></button></a>


				</div>
			</div>
		</div>
	</body>
</html>






