<!DOCTYPE html>

<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">
					<script type="text/javascript">
						function irAlIndice() {

							if (confirm("¿Quieres eliminarlo")) {

								document.location.href = 'bajausuario.php';

							}

						}

					</script>

					<?php					
						$cont = 0;
						$sql = "SELECT * FROM Catalogo WHERE activo = '1'";
						$resultado = query($sql, $conexion);
						while ($campo = mysql_fetch_array($resultado)) 
						{
							$cont = 1;
						}

						if ($cont == 1) 
						{
					?>

					<p>Seleccione el producto que desea eliminar:</p>
					
					<br />
					<br />
					<br />
					
					<form action="bajaproducto.php" method="POST">
					
						<?php
							$sql = "SELECT `id_catalogo` FROM `Catalogo` WHERE activo = 1";
							$resultado = query($sql, $conexion);
							
							echo 
							'
								<select id=bajaselect name=catalogo class="inputChico">
							';
							
							while ($campo = mysql_fetch_array($resultado)) 
							{
								echo 
								'
									<option>'
										.$campo["id_catalogo"].
									'<option>
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
						
					<input type="submit" value="Eliminar" class="botonChico" >
					</form>
					
					<?php 
						}
						
						if ($cont == 0) 
						{
					?>

							<div class="errorRegistros centrar">NO HAY REGISTROS</div>
					
					<?php 
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>