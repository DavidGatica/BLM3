<?php
	session_start();	
	
	if (!isset($_GET['op']))
		$op = NULL;
	
	else
		$op = $_GET['op'];	

	//Funcion que conecta la base de datos
	$conexion = conectar();

	$sql = "SELECT version FROM Version WHERE version_no='$no_version'";
	$resultado = query($sql, $conexion);
	
	while ($campo = mysql_fetch_array($resultado)) 
	{
		$version = $campo['version'];
	}
?>


<!DOCTYPE html >

<html>
	<body>		
		<div id="contenido">
			<div id="contenidoCont">
			
			<?php
				if (isset($_SESSION['usuario'])) 
				{
					$id_usuario = $_SESSION['usuario'];
					$query = "SELECT `permiso`, activo FROM `Usuarios` WHERE `id_usuario`='$id_usuario' ";
					
					//GENERA LA QUERY
					$result = mysql_query($query);
					
					//SI EXISTE RESULTADO GUARDA LAS VARIABLES
					while ($campo = mysql_fetch_array($result)) 
					{
						$permiso = $campo['permiso'];
						$activo = $campo['activo'];
					}
					
					if ($permiso == '1' && $activo == '1') 
					{
						header("Location: index.php?permiso=administracion&idUsuario=$id_usuario");
					}

					if ($permiso == '2' && $activo == '1') 
					{
						header("Location: index.php?permiso=ventas");
					}
				} 
				
				else 
				{
			?>
						
			<div class="centrar">
				<p>Inicie sesión</p>
				
				<br />
				<br />
				<br />
				
				<form action="validar_usuario.php" method="POST">
					<input type="text" class="inputChico" placeholder="Usuario" name="id_usuario" autofocus required>
					
					<br />
					<br />
					
					<input type="password" class="inputChico" placeholder="Contraseña" name="password" required>
					
					<br />
					<br />
					
					<input type="submit" value="Iniciar" class="botonChico">
				</form>
			</div>

			<?php
				}
			?>
			</div>
		</div>	
		
		<?php 
			if ($op == 'desactivado') 
			{
		?>
		
			<script>
				alert('Este usuario ha sido desactivado \nPongase en contacto el Administrador');
			</script>
		
		<?php
			}
		?>

		<?php 
			if ($op == 'mal') 
			{ 
		?>
		
			<script>
				alert('ERROR\nUsuario y/o contraseña erroneos, intente de nuevo');
			</script>
			
		<?php
			}
		?>
	</body>
</html>
