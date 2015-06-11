<html>
<div id="contenido">
<div id="contenidoCont">
<div class="centrar">   
   <?php
//Usuario Conectado
    session_start();

	$atras="algo";
        $id_usuario = $_SESSION['usuario'];


//Funcion que conecta la base de datos
        $conexion = conectar();

        $cont = 0;
        $sql = "SELECT empresa FROM Clientes";
        $resultado = query($sql, $conexion);
        while ($campo = mysql_fetch_array($resultado)) {
            $cont = 1;
        }
		

        if ($cont == 1) {
            ?>


    <script type="text/javascript">
        function irAlIndice() {

            if (confirm("¿Quieres Eliminarlo")) {

                document.location.href = 'bajausuario.php';

            }

        }

    </script>



            <p>Seleccione el cliente que desea eliminar:</p>
			<br />
			<br />
			<br />
            <form action="bajausuario.php" method="POST">



                <?php
//Seleccionamos Los nombres de los clientes segun usuario
                $sql = "SELECT `empresa` FROM `Clientes` ORDER BY `empresa`";
                $resultado = query($sql, $conexion);

                //Generamos el menu desplegable
                echo '<select id=bajaselect name=empresa>';
                while ($campo = mysql_fetch_array($resultado)) {
                    echo '<option>' . $campo['empresa'];
                }
                echo '</select>';
                ?>
<br />
			<br />
			<br />
                <input type="submit" value="Eliminar" class="botonChico" >

            <?php
            }
            else{
                ?>

                <div class="errorRegistros centrar">NO HAY REGISTROS</div>
            <?php }
        
        ?>

</div>
</div>
</div>

</html>