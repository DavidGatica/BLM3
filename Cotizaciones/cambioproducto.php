<?php
$catalogo = $_GET['catalogoCambio'];


//Obtener Datos de la empresa a cambiar "tabla clientes"
$sql = "SELECT * FROM `Catalogo` WHERE `id_catalogo` = '$catalogo'";
$resultado = query($sql, $conexion);
while ($campo = mysql_fetch_array($resultado)) {
    $id_catalogo = $campo['id_catalogo'];
    $unidad = $campo['unidad'];
    $descripcion = $campo['descripcion'];
}

if ($unidad == 'PZA.') {
    $i = 1;
}
if ($unidad == 'CJTO.') {
    $i = 2;
}
if ($unidad == 'JGO.') {
    $i = 3;
}
if ($unidad == 'ROLLO') {
    $i = 4;
}
if ($unidad == 'METRO') {
    $i = 5;
}
?>

<!DOCTYPE html >
<html>
    <body>
        <div id="contenido">
            <div id="contenidoCont">
				<div class="centrar">
					<p>Modifique los apartados del producto:</p>
					
					<br />
					<br />
					<br />
						
					<form action="cambioproducto2.php" method="POST">
						<input type="text" class="inputChico"  name="id_catalogo" value="<?php echo$id_catalogo; ?>" placeholder="C&aacute;talogo" autofocus required>

						<select style="background-color: white" class="inputChico" name="unidad" required>
							<option class="selectDefault" disabled selected>
								Unidad
							</option>
							
							<option name="PZA." <?php if ($i == 1) {echo"selected";} ?>>
								PZA.
							</option>
							
							<option name="JGO." <?php if ($i == 3) {echo"selected";} ?>>
								JGO.
							</option>
							
							<option name="METRO" <?php if ($i == 5) {echo"selected";} ?>>
								METRO.
							</option>
							
							<option value="CJTO." <?php if ($i == 2) {echo"selected";} ?>>
								CJTO.
							</option>
							
							<option value="ROLLO" <?php if ($i == 4) {echo"selected";} ?>>
								ROLLO
							</option>
						</select>
						
						<br />
						<br />

						<textarea  class="areaText" name="descripcion" placeholder="Descripción" required><?php echo $descripcion; ?></textarea>
						
						<br />
						<br />

						<input type="submit" value="Modificar" class="botonChico">
					</form>				
				</div>
			</div>
		</div>		
	</body>
</html>