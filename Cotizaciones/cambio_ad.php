<!doctype html>

<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">

					<?php						
						$cont = 0;
						
						$sql = "SELECT * FROM Clientes";
						$resultado = query($sql, $conexion);
						while ($campo = mysql_fetch_array($resultado)) 
						{
							$cont = 1;
						}

						if ($cont == 1) 
						{
					?>
					<p>Seleccione el cliente a modificar:</p>
					
					<br />
					<br />
					<br />
					
					<form action="cambiousuario.php" method="POST">
						<?php
							$sql = "SELECT * FROM Clientes ORDER BY empresa ";
							$resultado = query($sql, $conexion);

							echo 
							'
								<select id=cambioselect name=empresa class="inputChico">
							';

							while ($campo = mysql_fetch_array($resultado)) 
							{
								echo 
								'
									<option>'
										.$campo["empresa"].
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