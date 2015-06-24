<?php 
session_start();
include ("funciones_mysql.php");

$conexion = conectar();

include ("herramientaEdicion/diaEspaniol.php");

$fecha = fechaHoy();

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


	
if(isset($_SESSION['id_imagen']))
{ 
$id_imagen=$_SESSION['id_imagen'];
}
	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
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

#primerTitulo
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
	min-width: 31em;
	max-width: 31em;
	max-height: 15em;
	min-height: 15em;
	padding: 4px 8px;
}

#herramientaEdicion
{
	width: 28em;
	height: 15em;
	padding: 0;
}

#herramientas
{
	width: inherit;
	height: 2.7em;
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

#cajaVisualizador
{
	float: right;
	border: 5px solid #C3C3C4;
	width: 50%;
	height: 100%;
	box-sizing: border-box;
	overflow: scroll;
	overflow-y: hidden !important;	
}

#visualizador
{
	overflow: scroll;
	min-width: 55em;
	height: 45em;
	box-sizing: border-box;
	border: 2px solid #C3C3C4;
	margin: 5em 2em;
	padding: 1em;
}

#titulov
{
	font-size: 2em;
	font-weight: bold;
	color: black;
	margin: 2em;
}

.tool
{
	z-index: 5;
	float: left;
	margin: 0 0.5em;
	width: 1em;
	height: 1em;
	border: 1px solid #9f9f9f;
	border-radius: 3px;
	background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(179,179,179,1) 100%);
	transition: 0.3s;
}

.tool:hover
{
	border: 2px solid #c5c5c5;
}

.tool:active
{
	background: linear-gradient(135deg, rgba(179,179,179,1) 0%, rgba(255,255,255,1) 100%);
}

.tool2
{
	float: right;
	margin: 0 0.5em;
	width: 1em;
	height: 1em;
	border: 1px solid #9f9f9f;
	border-radius: 3px;
	background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(179,179,179,1) 100%);
	transition: 0.3s;
}

.tool2:hover
{
	border: 2px solid #c5c5c5;
}

.tool2:active
{
	background: linear-gradient(135deg, rgba(179,179,179,1) 0%, rgba(255,255,255,1) 100%);
}

#fechav
{
	color: #a9a9a9;
	font-size: 14px;
}

#horav
{
	color: #a9a9a9;
	font-size: 12px;
	margin-bottom: 2em;
}

#autorv
{
	float: right;
	color: #a9a9a9;
	font-size: 14px;
	margin-top: 2em;
	bottom: 0;
}

#imagenv img
{
	max-width: 30em;
}

#contenidov
{
	margin-bottom: 2em;
}
</style>
<body>

<div id="caja">

<h2>Nueva noticia</h2>

<div class="caja_centro centrar">

<?php 
if(isset($_GET['archivo']))
{
	$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
	header("url=$self"); //Refrescamos cada 300 segundos
	echo '
	<br>
	<br>
	La imagen ha sido subida exitosamente<br>
	Si desea subir una imagen diferente: <br>
	<form action="uploader.php" method="POST" enctype="multipart/form-data">
	<p for="imagen">Imagen:</p><br />
	<input type="file" name="imagen" id="imagen" /><br /><br />
	<input type="submit" name="subir" value="Subir"/>
</form><br>';
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


<form method="POST" action="noticias3.php">

<p>Título</p><br />
<input type="text" id="primerTitulo" oninput="visualizarT();">

<br />
<p>Contenido</p><br />
<div id="herramientaEdicion" class="centrar">
	<div id="herramientas">
		<div class="tool"><img src="herramientaEdicion/tamanio.png"></div>
		<div class="tool"><img src="herramientaEdicion/link.png"></div>
		<div class="tool2"><img src="herramientaEdicion/italica.png"></div>
		<div class="tool2"><img src="herramientaEdicion/subrayar.png"></div>
		<div class="tool2"><img src="herramientaEdicion/negrita.png"></div>
	</div>
	<textarea id="contenido" name="descripcion" class="inputform2" oninput="visualizarContenidoT();"></textarea>
</div>


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
</div>

<div id="cajaVisualizador">
	<div id="visualizador" class="centrar">
		<div id="titulov"></div>
		<div id="fechav"><?php echo $fecha; ?></div>
		<div id="horav"><?php echo date('h:i:s A'); ?></div>
		<div id="contenidov"></div>
		<div id="imagenv"><?php if(isset($_GET['archivo'])) echo '<img src="imagenesNoticias/'.$_GET['archivo'].'">' ?></div>
		<div id="autorv"><?php echo $_SESSION['usuario']; ?></div>
	</div>
</div>
<script type="text/javascript">

		function visualizarT()
		{
			var x = document.getElementById("primerTitulo").value;
			document.getElementById("titulov").innerHTML = x;
		}
		
		function visualizarContenidoT()
		{
			var x = document.getElementById("contenido").value;
			document.getElementById("contenidov").innerHTML = x;
		}
</script>
</body>
</html>