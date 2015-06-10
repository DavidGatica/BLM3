<html>
    <?php
	
	$atras="algo";
	
    //Usuario Conectado

/*
    if (!isset($_SESSION['usuario'])) {
        header('Location: log_in.php');
    }*/
    $id_usuario = $_SESSION['usuario'];

//Funcion que conecta la base de datos
    $conexion = conectar();

    $sql = "SELECT `empresa` FROM `Clientes` ";
    $resultado = query($sql, $conexion);

        ?>
		<div id="contenido">
			<div id="contenidoCont">		
				<div class="centrar">
					<p>Seleccione el cliente a cotizar.</p>
					<br />
					<br />
					<br />
					<form action="partidas.php" method="POST">
						<?php
						$sql = "SELECT `empresa` FROM `Clientes` WHERE desactivado= 0 ORDER BY `empresa`";
						$resultado = query($sql, $conexion);
						echo '<select name=empresa>';
						while ($campo = mysql_fetch_array($resultado)) {
							echo '<option>' . $campo["empresa"] . '</option>';
							$conectar = 1;
						}
						echo '</select>';
						?>
						<br />
						<br />
						<br />
						
						
						<div class="hover"><input type="submit" value="Cotizar" class="botonChico"></div>

				
				</div>
			</div>
		</div>		
</html>
