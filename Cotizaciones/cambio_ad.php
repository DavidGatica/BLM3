<html>

<div id="contenido">
<div id="contenidoCont">
<div class="centrar">

    <?php
//Usuario Conectado
    session_start();

	$atras="algo";

    if (!isset($_SESSION['usuario'])) {
        header('Location: relogin.php');
    }


    $id_usuario = $_SESSION['usuario'];


//Funcion que conecta la base de datos
    $conexion = conectar();

    $cont = 0;
    $sql = "SELECT `empresa` FROM `Clientes`  ";
    $resultado = query($sql, $conexion);
    while ($campo = mysql_fetch_array($resultado)) {
        $cont = 1;
    }

    if ($cont == 1) {
        ?>
        <p>Seleccione el cliente a modificar:</p>
		<br />
		<br />
		<br />
        <form action="cambiousuario.php" method="POST">
            <?php
//Usuario Conectado
//Seleccionamos Los nombres de los clientes segun usuario
            $sql = "SELECT `empresa` FROM `Clientes` ORDER BY `empresa` ";
            $resultado = query($sql, $conexion);

//Generamos el menu desplegable
            echo '<select id=cambioselect name=empresa class="inputChico">';

            while ($campo = mysql_fetch_array($resultado)) {
                echo '<option>' . $campo["empresa"];
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

</div>
</div>
</div>
</html>