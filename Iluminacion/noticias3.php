<?php
	session_start();
	
	
	include ("funciones_mysql.php");
	
	$conexion = conectar();
	
	$id_noticias = $_POST['id_noticias'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$fecha = $_POST['fecha'];
	$autor = $_POST['autor'];
	

	$sql = "INSERT INTO Noticias (id_noticias, titulo, descripcion, fecha, autor) VALUES ('$id_noticias','$titulo','$descripcion','$fecha','$autor')";
	$resultado = query($sql, $conexion);
	
?>

<html>

    <script type="text/javascript">
        function regresar() {
            alert("La noticia se publico con exito");
            document.location.href = 'noticias.php';
        }
        regresar()

    </script>

</html>

