<html>
	<div id="contenido">
	<div id="contenidoCont">
	<div class="centrar">
    <br><br>
    <p>Seleccione el usuario a modificar:</p>
	<br />
	<br />
	<br />
    <form action="cambiousuarion.php" method="POST">
        <?php
//Usuario Conectado

        if (!isset($_SESSION['usuario'])) {
            header('Location: relogin.php');
        } else {


            $id_usuario = $_SESSION['usuario'];


//Funcion que conecta la base de datos
            $conexion = conectar();


//Seleccionamos Los nombres de los clientes segun usuario
            $sql = "SELECT nombre, apellido_p FROM `Usuarios` WHERE activo='1'";
            $resultado = query($sql, $conexion);

//Generamos el menu desplegable
            echo '<select id=cambioselect name=nombre class="inputChico">';
            while ($campo = mysql_fetch_array($resultado)) {
                echo '<option value="' . $campo["nombre"] . '"' . '>' . $campo["nombre"];
            }
            echo '</select>';
            ?>
			<br>
			<br>
			<br>
            <input type="submit" value="Modificar" class="botonChico">

        <?php } ?>
		</div>
		</div>
		</div>
        </html>
