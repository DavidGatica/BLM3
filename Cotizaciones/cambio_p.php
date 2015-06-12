<html>
	<div id="contenido">
	<div id="contenidoCont">
	<div class="centrar">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

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

            <p>Seleccione el producto que desea cambiar:</p>
			
			<br />
			<br />
			<br />
			
            <form action="cambioproducto.php" method="POST">

        <?php
//Seleccionamos Los nombres de los clientes segun usuario
        $sql = "SELECT `id_catalogo` FROM `Catalogo`  WHERE activo='1' ORDER BY `id_catalogo`";
        $resultado = query($sql, $conexion);

        //Generamos el menu desplegable
        echo '<select id=cambioselect name=catalogo class="inputChico">';
        while ($campo = mysql_fetch_array($resultado)) {
            echo '<option>' . $campo["id_catalogo"];
        }
        echo '</select>';
        ?>
		<br />
		<br />
		<br />

                <input type="submit" value="Modificar" class="botonChico" >

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