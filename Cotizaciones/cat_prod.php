<?php
    if (!isset($_GET['opcion']))
        $opcion = "nada";
	
    else
        $opcion = $_GET['opcion'];

    if (!isset($_POST['producto']))
        $producto = "nada";
	
    else
        $producto = $_POST['producto'];

    if (!isset($_POST['descripcion']))
        $descripcion = "nada";
	
    else
        $descripcion = $_POST['descripcion'];
?>
<html>
	<body>
		<div id="contenido">
			<div id="contenidoCont">
				<div class="centrar">				
					<p>Cat&aacute;logo de productos</p>
					
					<br />
					<br />
					<br />

				<div id="buscadoresCentrados2">								
					<div class="alineaIzquierda centrar">
						Mostrar todo:
						
						<br />
						<br />
						
						<input type="button" value="Mostrar todo" class="botonChico">
					</div>
				
					<div class="alineaIzquierda centrar">
						Buscar por catalogo:
						
						<br />
						<br />
						
						<form action="cat_prod.php" method="POST">
							<input type=text name=producto class="inpuChico" required> 
							
							<br />
							<br />
							
							<input type=submit value="Buscar" class="botonChico">
						</form>
					</div>
					
					<div class="alineaIzquierda centrar">
						Buscar por descripción:
						
						<br />
						<br />
						
						<form action="cat_prod.php" method="POST">
							<input type=text name=descripcion class="inpuChico" required> 
							
							<br />
							<br />
							
							<input type=submit value="Buscar" class="botonChico">
						</form>
					</div>
					
					<div class="alineaIzquierda centrar">
						Salir:
						
						<br />
						<br />
						
						<a href="administracion.php?sec=productos">
							<input name="button" type="submit" value="Salir" class="botonChico" />
						</a>
					</div>
				</div>

				<?php
					if ($opcion == "todo") 
					{
						include("catalogo.php");
					}

					if ($producto != "nada") 
					{
						include("busqueda.php");
					}

					if ($descripcion != "nada") 
					{
						include("busqueda2.php");
					}
				?>
				
				</div>
			</div>
		</div>
	</body>
</html>



