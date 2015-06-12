<!DOCTYPE html>

<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">
				
					<script type="text/javascript">
						function irAlIndice() 
						{
							if (confirm("¿Quieres Eliminarlo")) 
							{
								document.location.href = 'bajausuarion.php';
							}
						}
					</script>

					<br />
					<br />
					
					<p>Seleccione el usuario que desea eliminar:</p>
					
					<br />
					<br />
					<br />
					
					<form action="bajausuarion.php" method="POST">
					
						<?php
							$sql = "SELECT * FROM Usuarios WHERE activo='1'";
							$resultado = query($sql, $conexion);
							
							echo 
							'
								<select id=bajaselect name=nombre class="inputChico">
							';
							
							while ($campo = mysql_fetch_array($resultado)) 
							{
								echo '<option>' . $campo["nombre"] ;
							}
							
							echo 
							'
								</select>
							';
						?>
						
						<br />
						<br />
						<br />
						
						<input type="submit" value="Eliminar" class="botonChico" >
					</form>				
				</div>
			</div>
		</div>
	</body>
</html>


