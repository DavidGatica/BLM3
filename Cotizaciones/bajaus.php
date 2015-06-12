<html>
	<div id="contenido">
	<div id="contenidoCont">
	<div class="centrar">
    <script type="text/javascript">
        function irAlIndice() {
            if (confirm("¿Quieres Eliminarlo")) {
                document.location.href = 'bajausuarion.php';
            }
        }
    </script>

    <br><br>
    <p>Seleccione el usuario que desea eliminar:</p>
	<br>
	<br>
	<br>
	
    <form action="bajausuarion.php" method="POST">
        <?php
//Usuario Conectado



        if (!isset($_SESSION['usuario'])) {
            header('Location: relogin.php');
        } else {
//incluimos el archivo con las funciones



            $id_usuario = $_SESSION['usuario'];


//Funcion que conecta la base de datos
            $conexion = conectar();


//Seleccionamos Los nombres de los usuarios 
            $sql = "SELECT nombre, apellido_p FROM `Usuarios` WHERE activo='1'";
            $resultado = query($sql, $conexion);

//Generamos el menu desplegable
            echo '<select id=bajaselect name=nombre class="inputChico">';
            while ($campo = mysql_fetch_array($resultado)) {
                echo '<option>' . $campo["nombre"] ;
            }
            echo '</select>';
            ?>
			<br>
			<br>
			<br>
            <input type="submit" value="Eliminar" class="botonChico" >

        </form>


    <?php } ?>
	
	</div>
	</div>
	</div>
</html>


