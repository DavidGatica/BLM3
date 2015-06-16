<?php
session_start();

//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();

$id_noticia=$_POST['id_noticias'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$autor=$_POST['autor'];



//Agregar Campos en la Tabla 
$sqla = "INSERT INTO `Noticias` (id_noticias, titulo, descripcion, fecha, autor) values ('$id_noticias', '$titulo', '$descripcion', '$fecha', '$autor')";
$resultadoa = query($sqla, $conexion);
?>

<html>

    <script type="text/javascript">
        function regresar() {
            alert("La notica se publico con exito");
            document.location.href = 'noticias.php';
        }
        regresar()

    </script>

</html>