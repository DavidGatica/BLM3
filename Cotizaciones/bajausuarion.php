<?php
if (!isset($_GET['sec'])) {
    $seccion = null;
} else {
    $seccion = $_GET['sec'];
}

//Capturamos el usuario autenticado
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: log_in.php');
}
$id_usuario = $_SESSION['usuario'];

//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();

//Obtenemos el nombre de la empresa por el metodo POST
$nombre = $_POST['nombre'];
?>

<!DOCTYPE html >
<html>
    <head>
        <title>Consecutivo de Cotizaciones</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="page">
            <div id="header">
                <h1>Bestlight M&eacute;xico S.A. de C.V.</h1>
                
            </div> <br><br><br>

            <div id="modificar">

                <div id="titulo">Realmente desea borrar al usuario <br>    <?php echo'<div id=empresadel>" ' . $nombre . ' "</div>'; ?> </div>


                <div id=centrarbaja>    

                    <a href="?sec=borrar&nombre=<?php echo$nombre; ?>"><button class="formu-button2"><div id="cambioboton">Aceptar</div></button></a>

                    <a href="administracion.php"><button class="formu-button2"><div id="cambioboton">Cancelar</div></button></a>

                </div>


                <?php
                echo $nombre;
                if ($seccion == "borrar") {
                    $nombre = $_GET['nombre'];

//Cambiar el campo "desactivado" para Eliminar de la interfaz
                    $sql = "UPDATE `Usuarios` SET `activo`='0' WHERE `nombre`='$nombre'";
                    $resultado = query($sql, $conexion);
                    ?>
                    <script type="text/javascript">
                        function eliminado() {
                            alert("Se ha eliminado con &Eacute;xito");
                            document.location.href = 'administracion.php';
                        }
                        eliminado()
                    </script>

                    <?php
                }


                if ($seccion == "") {
                    
                }
                ?>    		
