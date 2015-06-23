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
Contenido protegido

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">

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
margin: 0 auto;
margin-top: 2em;
width: 37.7em;
height: auto;
padding: 2em;
box-sizing: border-box;
background: #E4E5E6;
border-radius: 10px;
border: 1px solid #C3C3C4;
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
	width: 15em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-right: 2em;
transition: padding .25s;

}

.inputform2
{
	border-color: #BEC4D3;
	width: 33.4em;
padding: 4px 8px;
border-style: solid;
border-width: 2px;
margin-right: 2em;
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

<h2>Nueva entrada de notica<br>Best Ligth México</h2>

<div class="caja_centro">

<?php 
if($_GET['archivo'] == "subido")
{
	echo "La imagen ha sido subida exitosamente";
}
else
{
	echo'
<form action="uploader.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form>';
}
?>


<form method="POST" action="noticias3.php" accept-charset="UTF-8">

<div class="izqder">
<p>Título</p><br />
<input type="text" name="titulo" class="inputform" >
</div>

<div class="break"></div>
<br />
<p>Descripcion</p><br />
<textarea name="descripcion" class="inputform2"></textarea>


<br />
<br />
<p>Autor</p><br />
<input type="text" name="autor" class="inputform2" value="<?php echo $_SESSION['usuario']; ?>" disabled>

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

