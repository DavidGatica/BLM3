<?php
session_start();
if (isset($_SESSION['usuario'])){
	
	echo '<a href="cerrar.php" >Cerrar Sesión</a>';
}
?>
<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="estilo.css" rel="stylesheet" type="text/css">
<LINK REL="SHORTCUT ICON" TYPE="IMAGE/ICO" HREF="ico.png">
<script src="ajax.js" language="JavaScript"></script>
<body style="padding:0; margin:0" onload="CambiarColor1();">

<div id="arribaa">
	<div id="buscar">
<script>
  (function() {
    var cx = '013486087382821800792:hnrpeclmfyg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
</div></div>

<div align="center" >
<div id="logos_centrados"><IMG SRC="logo.png" height="90px" align="left"> <IMG SRC="logocarmanah.png" height="70" align="right"></div>
<div class="break"></div>
<br />

<div class="texto7">
Iluminación Fotovoltaica Profesional 
</div>

<table bgcolor="#38444B" width="1020" >

<tr >
 
<td style=" border-right: 2px ridge white;">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; <a href="http://www.bestlightmexico.com.mx/iluminacion/index.php" id="inicio"> Inicio </a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/productos.html" id="inicio"> Productos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/proyectos.html" id="inicio"> Proyectos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/index.html" id="inicio"> Capacitación</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/conocenos.html" id="inicio"> ¿Quiénes somos?</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/videos.html" id="inicio"> Videos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/contactanos.html" id="inicio"> Contáctanos</a></td>
<td style=" color: white; font-family: Arial, sans serif; font-size: 8pt; font-weight: bold;"><?php if(isset($_SESSION['usuario'])) {echo "Bienvenido ".$_SESSION['usuario'];}else{echo '<a href="login4.php" id="inicio">Iniciar Sesión</a>';}?>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 


</tr>

</table  >
</div>

<br>

<!--- INICIO DE LA NUEVA PAGINA WEB -->

<table  width="1020" align="center" border=0 >
<tr>

<td >
<IMG SRC="blm45.jpg" height="90" align=left>
</td>

<td>
</td>
</tr>

<tr>
<td valign="top" >
<br>
<img src="beneficios.jpg" value="Mostrar2" onclick="mostrar2()" align="left" id="brillo">
<img src="caracteristicas.jpg" value="Mostrar" onclick="mostrar()" align="left" id="brillo">  
<br><br>
<table  width="510px" height="300px" style="border-style: solid; border-color: #8B8B8B; border-width: 3px;" cellspacing="20px" >
<tr>
<td valign="center" >
<div id='carac' style='display:none;'>
<br>
		<div id='texto4' align="left">
-Hasta 960 lumenes<br>
-Iluminacion adaptativa (perfiles de &nbsp;&nbsp;operacion)<br>
-Distribuciones IES estandares tipos: &nbsp;&nbsp;II,III,IV,V<br>
-Temperaturas de calor 5700K y 4000K<br>
-Luminaria LED de alta eficiencia<br>
-Garantia limitada por 3 años<br><br>
</div>
</div>
<div id='bene' style='display:block;'>
		<div id='texto4' align="left">
El sistema de iluminacion LED solar para exteriores EG 40 80 145 combina un diseño compacto con una eficiencia energetica superir y logra resultados ideales para la iluminacion de senderos y aplicaciones de iluminacion a pequeña escala</div>
</div>
</td></tr>
</table>

<script type="text/javascript">
function mostrar(){
document.getElementById('carac').style.display = 'block'; 
document.getElementById('bene').style.display = 'none';
}

function mostrar2(){
document.getElementById('bene').style.display = 'block';
document.getElementById('carac').style.display = 'none';
}
</script>

<br><br>
<a href="http://bestlightmexico.com.mx/attachments/File/EG-40.pdf"><IMG SRC="brouchure.jpg" height="50" align="left" id="brillo"></a>
</td>

<td>

<div id=frente style='display:block;'>
<IMG SRC="frente45.jpg" height="350" width="450">
<div id='texto6'> FRENTE </div>
</div>

<div id=vuelta style='display:none;'>
<IMG SRC="vuelta45.jpg" height="350" width="450">
<div id='texto6'> VUELTA </div>
</div>

<script type="text/javascript">
function frente(){
document.getElementById('frente').style.display = 'block'; 
document.getElementById('vuelta').style.display = 'none';
}

function vuelta(){
document.getElementById('vuelta').style.display = 'block';
document.getElementById('frente').style.display = 'none';
}
</script>


<script language="javascript" type="text/javascript">
function CambiarColor1(id, Color)
{
theid = document.getElementById("wscolor");
theid.style.background= "#FDBC00";
theim = document.getElementById("apcolor");
theim.style.background= "#333333";

}</script>

<script language="javascript" type="text/javascript">
function CambiarColor2(id, Color)
{
theid = document.getElementById(id);
theid.style.background= Color;
theim = document.getElementById("wscolor");
theim.style.background= "#333333";
}</script>

<a href="javascript:;" onclick="CambiarColor1('wscolor','#FDBC00'); return false;" > 
<button style="padding:4px; background:#333333;" id="wscolor" class="boton" onclick="frente()">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</button>
</a> 


<a href="javascript:;" onclick="CambiarColor2('apcolor','#FDBC00'); return false;" > 
<button style="padding:4px; background:#333333;" id="apcolor" class="boton" onclick="vuelta()">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</button>
</a> 



</td>


</tr>
</table>

<!--- INICIO DEL PIE DE PAGINA -->
<br><br>
<div align="center" >

<div id="contenedor">

<a href="https://www.youtube.com/channel/UChpLTqTCVyJl2tgeCuZ8CIQ/videos" target="new" >
<img alt="youtube" src="youtube.png" title="Best Ligth México on Youtube" id="youtube">
</a>

</div>


<table bgcolor="#38444B" width="1020"  border="0" cellpadding="2" heigth="100" align="center">
<tr>
<td >&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; <a href="http://www.bestlightmexico.com.mx/iluminacion/inicio.php" id="pie" > Inicio </a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/productos.php" id="pie" > Productos</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/proyectos.php" id="pie" > Proyectos</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/inicio.php" id="pie" > Capacitacion</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/conocenos.php" id="pie" > Quienes somos?</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/videos.php" id="pie" > Videos</a></td> 
<td><a href="http://www.bestlightmexico.com.mx/iluminacion/contactanos.php" id="pie"> Contactanos</a>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
<a href="http://www.bestlightmexico.com.mx/attachments/File/apblm.pdf" id="texto9" align=center> Aviso de Privacidad</a>
</div>
<br>
</body>
</html>


