<!DOCTYPE html>

<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">
				
					<br />
					<br />
					
					<p>Seleccione el usuario a modificar:</p>
					
					<br />
					<br />
					<br />
					
					<form action="cambiousuarion.php" method="POST">
					
						<?php
							$sql = "SELECT nombre, apellido_p FROM `Usuarios` WHERE activo='1'";
							$resultado = query($sql, $conexion);
							echo 
							'
								<select id=cambioselect name=nombre class="inputChico">
							';
							
							while ($campo = mysql_fetch_array($resultado)) 
							{
								echo 
								'
									<option value="'.$campo["nombre"].'">' 
										. $campo["nombre"].
									'</option>
								';
							}
							
							echo 
							'
								</select>
							';
						?>
						
						<br />
						<br />
						<br />
						
						<input type="submit" value="Modificar" class="botonChico">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>