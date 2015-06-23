<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8'); 
include ("funciones_mysql.php");

$conexion = conectar();

$id_usuario = $_SESSION['usuario'];
	
	$sql = "SELECT * FROM Registro WHERE id_usuario = '$id_usuario'";
	$resultado = query($sql, $conexion);
	
	while ($campo = mysql_fetch_array($resultado)) 
	{
		$password = $campo['password'];
	}
	
if(!isset($_POST['password'])){
	$_POST['password']=$password;
}

$_SESSION['passwordNoticia']=$password;

if ($_POST['password'] != $password OR $_SESSION['passwordNoticia']==null) 
{ 
	unset($_SESSION['passwordNoticia']);
	header("Location: noticias.php?error=si");
	
}

else
{
	
if(isset($_SESSION['id_imagen']))
{ 
$id_imagen=$_SESSION['id_imagen'];
}
	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
html
{
	height: 100%;
}

body
{
	margin: 0;
	padding: 0;
	height: 100%;
	width: 100%;
}

input:hover
{
	
}
input[placeholder]{
color:#A2A2A3;
}

p{
color:#6F7086;


}
input:focus
{
	border-color: #FFC423;
	box-shadow: 0 0 2px #FFC423;
	padding: 0.4em 1em 0.4em 0.5em;
	
}

input:hover
{
	border-color: #FFC423;
	box-shadow: 0 0 14px #FFC423;
	
	
}


.verdesin:focus
{
	border-color: #FFC423;
	box-shadow: 0 0 2px #FFC423;
	padding: 0.4em 1em 0.4em 0.5em;
}

#caja
{

float: left;
width: 50%;
height: 100%;
padding: 1em;
bottom: 0;
box-sizing: border-box;
background: #E4E5E6;
border: 1px solid #C3C3C4;
overflow: scroll;
overflow-y: hidden !important;
}

#botonc
{
	margin: 0 auto;
	text-align: center;
}

body
{
background: #white;
font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
font-size: 16px;
}

h1
{
	color: black;
	text-align: center;
}

h2
{
	
	color:#6F7086;
	text-align: center;
	font-weight:normal;
}

h4
{
	color: white;
	text-align: center;
}

.inputform
{
	border-color: #BEC4D3;
	width: 30em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
transition: padding .25s;

}

.inputform2
{
	border-color: #BEC4D3;
	width: 50em;
	min-height: 20em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
transition: padding .25s;

}

.inputform3
{
	border-color: #BEC4D3;
	width: 8em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-left: 0.5em;
transition: padding .25s;

}

.izqder
{
	float: left;
}

.centrar
{
	text-align: center;
	margin: 0 auto;
}

#base
{
	color: white;
	font-size: 0.8em;
	float: right;
	font-weight: bold;	
}

.break
{
clear: both;
}

.letracolor
{
	color: #BEC5D3;
}

#boton
{
	border: none;
	background: #E9EAEB;
	padding: 1em;
	border-radius: 6px;
	font-weight: bold;
	transition: padding .5s;
	text-decoration: none;
	color: black;
}

#boton:active
{
	border-color: #85CCEA;
	box-shadow: 0 0 5px black;
	padding: 1.1em;
}

.bold
{
	font-weight: bold;
}
</style>
<div id="caja">

<h2>Nueva noticia</h2>

<div class="caja_centro centrar">

<?php 
if($_GET['archivo'] == "subido")
{
	echo "
	<br>
	<br>
	La imagen ha sido subida exitosamente<br>";
}
else
{
	echo'
	<br>
	<br>
<form action="uploader.php" method="POST" enctype="multipart/form-data">
	<p for="imagen">Imagen:</p><br />
	<input type="file" name="imagen" id="imagen" /><br /><br />
	<input type="submit" name="subir" value="Subir"/>
</form><br>';
}
?>


<form method="POST" action="noticias3.php" accept-charset="UTF-8">

<p>Título</p><br />
<input type="text" name="titulo" class="inputform" required>

<br />
<p>Descripción</p><br />
<textarea name="descripcion" class="inputform2"></textarea>


<br />
<br />
<p>Autor</p><br />
<?php echo $_SESSION['usuario']; ?>

</div>

<br />
<div id="botonc">
<a href="http://www.bestlightmexico.com.mx/iluminacion/noticias.php?<?php echo "id_imagen=$id_imagen" ?>" id="boton">Cancelar</a>
<input type="submit" value="Publicar Noticia" id="boton">
</form>
</div>
<br />
<br />
<?php 
} 
?>

