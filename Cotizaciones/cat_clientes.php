<?php
    if (!isset($_GET['opcion']))
        $opcion = "nada";
    else
        $opcion = $_GET['opcion'];

    if (!isset($_POST['rfc']))
        $rfc = "nada";
    else
        $rfc = $_POST['rfc'];

    if (!isset($_POST['empresa']))
        $empresa = "nada";
    else
        $empresa = $_POST['empresa'];
?>
	
<!DOCTYPE html>

<html>
    <body>
	
		<script>
			function todo() 
			{
				location.href = "?sec=visualizarC&opcion=todo";
			}
		</script>
	
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">
				    <p>Herramienta de visualizacion de clientes</p>
				   
				    <br />
				    <br />
					
					<div id="buscadoresCentrados">					
						<div class="alineaIzquierda centrar">
							Mostrar todo:
							
							<br />
							<br />
							
							<input type="button" value="Mostrar todo" onclick="todo()" class="botonChico">							
						</div>

						<div class="alineaIzquierda centrar">
							Buscar por rfc:
							
							<br />
							<br />
							
							<form action="cat_clientes.php" method="POST">
								<input type=text name=rfc class="inputChico" required> 
								
								<br />
								<br />
								
								<input type=submit value="Buscar" class="botonChico">
							</form>
						</div>

						<div class="alineaIzquierda centrar">
							Buscar por nombre de empresa:
							
							<br />
							<br />
							
							<form action="cat_clientes.php" method="POST">
								<input type=text name=empresa class="inputChico" required> 
								
								<br />
								<br />
								
								<input type=submit value="Buscar" class="botonChico">
							</form>
						</div>

						<div class="alineaIzquierda centrar">
							Salir:
							
							<br />
							<br />
							
							<a href="administracion.php">
								<input name="button" type="submit" value="Salir" class="botonChico"/>
							</a>
						</div>					
					</div>
								
					<div class="break"></div>
					
					<br />
					<br />
					<br />

				</div>

				<?php
					if ($opcion == "todo") 
					{
						include("catalogo_clientes.php");
					}

					if ($rfc != "nada") 
					{
						include("busqueda_clientes.php");
					}

					if ($empresa != "nada") 
					{
						include("busqueda_clientes2.php");
					}
				?>
			</div>
		</div>
	</body>
</html>