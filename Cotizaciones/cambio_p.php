<!DOCTYPE html>

<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">
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

							<p>Seleccione el producto que desea cambiar:</p>
							
							<br />
							<br />
							<br />
							
							<form action="cambioproducto.php" method="POST">

							<?php
								$sql = "SELECT `id_catalogo` FROM `Catalogo`  WHERE activo='1' ORDER BY `id_catalogo`";
								$resultado = query($sql, $conexion);
								
								echo 
								'
									<select id=cambioselect name=catalogo class="inputChico">
								';
								
								while ($campo = mysql_fetch_array($resultado)) 
								{
									echo 
									'
										<option>'
										.$campo["id_catalogo"].
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

							<input type="submit" value="Modificar" class="botonChico" >
							</form>

					<?php 
						}
						
						if ($cont == 0) 
						{
					?>
					
							<div class="errorRegistros centrar">
								NO HAY REGISTROS
							</div>
							
					<?php 
						} 
					?>
				</div>
			</div>
		</div>
	</body>
</html>