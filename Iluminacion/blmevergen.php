
<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="estilo.css" rel="stylesheet" type="text/css">
<LINK REL="SHORTCUT ICON" TYPE="IMAGE/ICO" HREF="ico.png">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51891618-1', 'auto');
  ga('send', 'pageview');

</script>
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
  
  
  function cerrarSesion()
			{
				if (confirm("¿Realmente desea cerrar sesión?"))
				{
					document.location.href = 'cerrar.php';
				}

				else
				{
					document.location.href = 'index.php';
				}
			}
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
 
<td style=" border-right: 2px ridge white; color: white; font-family: Arial, sans serif; font-size: 8pt; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; <?php session_start(); if (isset($_SESSION['usuario'])){echo '<a onclick="cerrarSesion()">Cerrar Sesión</a>';}?></td>
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/index.php" id="inicio"> Inicio </a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/productos.php" id="inicio"> Productos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/proyectos.php" id="inicio"> Proyectos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/index.php" id="inicio"> Capacitación</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/conocenos.php" id="inicio"> ¿Quiénes somos?</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/videos.php" id="inicio"> Videos</a></td> 
<td style=" border-right: 2px ridge white;"><a href="http://www.bestlightmexico.com.mx/iluminacion/contactanos.php" id="inicio"> Contáctanos</a></td>
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
<IMG SRC="blmevergen.jpg" height="90" align=left>
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
-Rango de 2,000 a 9,000 Lumenes<br>
-Instalacion en 30 min o menos<br>
-Cuentan con:<br> &nbsp;Wi-Fi, GPS y sensores de movimento<br>
-Gabinete arquitectonico<br>
-Distribuciones IES estandares tipos: &nbsp;&nbsp;II,III,IV,V<br>
-Temperaturas de color 6000K y 4300K<br>

</div>
</div>
<div id='bene' style='display:block;'>
		<div id='texto4' align="left">
El everGEN 1700 es el sistema de Carmanah mas avanzado por su solucion tecnologica, ya que cuentan con lo ultimo en tecnologia de intercomunicacion.<IMG SRC="sensor.jpg" height="120" width="400" align="center"></div>
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
<a href="EverGEN.pdf"><IMG SRC="brouchure.jpg" height="50" align="left" id="brillo"></a>
</td>

<td>

<div id=frente style='display:block;'>

<IMG SRC="everGEN1700.jpg" height="300" width="300">
<div id='texto6'>FRENTE</div>
<br>

</div>





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


