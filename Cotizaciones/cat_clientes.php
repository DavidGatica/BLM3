<?php
session_start();
$atras="algo";
if (!isset($_SESSION['usuario'])) {
    ?> 
    <?php header('Location: cerrar_sesion.php'); ?>

    <div id="detalles">
    </div>  <?php
} else {

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
	
    <body>
	
	<script>
	function todo() {
	location.href = "?sec=visualizarC&opcion=todo";
	}

	</script>
	
		<div id="contenido">
		<div id="contenidoCont">
		<div class="centrar">
       <p>Herramienta de visualizacion de clientes</p>

        <div align="center" style="margin-top:30px;">
            <table cellspacing="30px" border=0>

                <tr><td valign="top" > 
                        Mostrar todo:
                        <br><br>
                        <input type="button" value="Mostrar Todo" onclick="todo()">
                    </td>


                    <td valign="top"  > 
                        Buscar por rfc:
                        <br><br>
                        <form action="cat_clientes.php" method="POST">
                            <input type=text name=rfc required> 
                            <input type=submit value="Buscar">
                        </form>
                    </td>

                    <td valign="top"  > 
                        Buscar por nombre de la empresa:
                        <br><br>
                        <form action="cat_clientes.php" method="POST">
                            <input type=text name=empresa required> 
                            <input type=submit value="Buscar">
                        </form>
                    </td>

                    <td valign="top">
                        Salir:
                        <br><br>
                        <a href="administracion.php">
                            <input name="button" type="submit" value="Salir" /></a>
                    </td></tr>

            </table>

        </div>


		<div>
        <?php
        if ($opcion == "todo") {
            include("catalogo_clientes.php");
        }

        if ($rfc != "nada") {
            include("busqueda_clientes.php");
        }

        if ($empresa != "nada") {
            include("busqueda_clientes2.php");
        }
    }
    ?>
		</div>
</div>
</div>
</div>
</body>
