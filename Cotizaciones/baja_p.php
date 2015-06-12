<html>
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
    if (!isset($_SESSION['usuario'])) {
        header('Location: relogin.php');
    } else {



        $id_usuario = $_SESSION['usuario'];


//Funcion que conecta la base de datos
        $conexion = conectar();

        $cont = 0;
        $sql = "SELECT `id_catalogo` FROM `Catalogo` WHERE activo = '1'";
        $resultado = query($sql, $conexion);
        while ($campo = mysql_fetch_array($resultado)) {
            $cont = 1;
        }

        if ($cont == 1) {
            ?>

            <p>Seleccione el producto que desea eliminar:</p>
			<br>
			<br>
			<br>
            <form action="bajaproducto.php" method="POST">



        <?php
//Seleccionamos Los nombres de los clientes segun usuario
        $sql = "SELECT `id_catalogo` FROM `Catalogo` WHERE activo = 1";
        $resultado = query($sql, $conexion);

        //Generamos el menu desplegable
        echo '<select id=bajaselect name=catalogo class="inputChico">';
        while ($campo = mysql_fetch_array($resultado)) {
            echo '<option>' . $campo["id_catalogo"];
        }
        echo '</select>';
        ?>
		<br>
		<br>
		<br>
                <input type="submit" value="Eliminar" class="botonChico" >
            </form>
            <?php }
            if ($cont == 0) {
                ?>

            <div class="errorRegistros centrar">NO HAY REGISTROS</div>
    <?php } ?>


    <?php } ?>
	</div>
	</div>
	</div>
</html>