<?php
session_start();
if (isset($_SESSION['usuario'])){
	
	echo '<a href="cerrar.php" >Cerrar Sesión</a>';
}
?>
<!DOCTYPE html>
<html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51891618-1', 'auto');
  ga('send', 'pageview');

</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="estilo.css" rel="stylesheet" type="text/css">
<LINK REL="SHORTCUT ICON" TYPE="IMAGE/ICO" HREF="ico.png">
<body style="padding:0; margin:0">

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


<div id="page-wrap">

<div align="center" >
<div id="logos_centrados"><IMG SRC="logo.png" height="90px" align="left"> <IMG SRC="logocarmanah.png" height="70" align="right"></div>
<div class="break"></div>
<br>

<div class="texto7">
Iluminación Fotovoltaica Profesional 
</div>

<table bgcolor="#38444b" width="1020" >

<tr >
 
<td style=" border-right: 2px ridge white;">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; <a href="http://www.bestlightmexico.com.mx/iluminacion/index.php" id="inicio"> Inicio </a></td> 
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

</table >
</div>
<br><br>

<a href="noticias2.php" target="_self"> <input type="button" name="boton" value="Agregar Noticia" /> </a>

<br><br>


<table>
						<tr>
							<td>No Noticia</td>                        
							<td>Titulo</td>
							<td>Descripcion</td>
							<td>Fecha</td>
							<td>Autor</td>
							
						</tr>
						
						<?php
						
						$sql = "SELECT * FROM Noticias ORDER BY fecha DESC";
						$resultado = query($sql, $conexion);
						while ($campo = mysql_fetch_array($resultado)) 
						{
							$activo = $campo['activo'];
							$id_noticias = $campo['id_noticias'];
							

							echo 
							"
								<tr>
							";
							
							echo 
							"
								<td align='center'>" 
									.$campo['id_noticias'].
								"</td>
							";

							$sql3 = "SELECT * FROM Noticias WHERE titulo = '$titulo'";
							$resultado3 = query($sql3, $conexion);
							$campo3 = mysql_fetch_array($resultado3);
							$titulo = $campo3['tiulo'];


							echo 
							"
								<td align='center'>"
									.$campo['titulo']. 
								"</td>
							";

							$sql2 = "SELECT * FROM Noticias WHERE descricpcion = '$descripcion'";
							$resultado2 = query($sql2, $conexion);
							$campo2 = mysql_fetch_array($resultado2);
							$descripcion = $campo2['descripcion'];
						

							echo 
							"
								<td>" 
									.$campo2['descrpcion']. 
								"</td>
							";

							

							echo 
							"
								<td>
									<a href='ver_cotizacion.php?id_cotizacion=".$id_cotizacion."' class='gestion'>
										Ver
									</a>
								</td>
								
								<td>
									<a href='editar_cotizacion.php?id_cotizacion=".$id_cotizacion."' class='gestion'>
										Editar
									</a>
								</td>
								
								<td>
									<a href='reusar.php?id_cotizacion=".$id_cotizacion."' class='gestion'>
										Reusar
									</a>
								</td>
								
								<td>
							";
							
							if ($activo == 1) 
							{
								echo 
								"
									<div class='eliminart gestion' align='center' onclick='Eliminar(".$id_cotizacion.")'>
										Eliminar
									</div>
								</td>
								";
							}
							
							if ($activo == 0) 
							{
								echo 
								"
									<div class='restaurar gestion' align='center' onclick='Restaurar(".$id_cotizacion.")'>
										Activar
									</div>
								</td>
								";
							}

							echo "</tr>";
						}
						
						?>
					</table>

 




<br>

<div align="center" >

<div id="contenedor">

<a href="https://www.youtube.com/channel/UChpLTqTCVyJl2tgeCuZ8CIQ/videos" target="new" >
<img alt="youtube" src="youtube.png" title="Best Ligth México on Youtube" id="youtube">
</a>

</div>



<table bgcolor="#38444B" width="1020"  border="0" cellpadding="2" heigth="100">
<tr>
<td >&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; <a href="http://www.bestlightmexico.com.mx/iluminacion/inicio.php" id="pie" > Inicio </a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/productos.php" id="pie" > Productos</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/proyectos.php" id="pie" > Proyectos</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/inicio.php" id="pie" > Capacitación</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/conocenos.php" id="pie" > ¿Quiénes somos?</a></td> 
<td ><a href="http://www.bestlightmexico.com.mx/iluminacion/videos.php" id="pie" > Videos</a></td> 
<td><a href="http://www.bestlightmexico.com.mx/iluminacion/contactanos.php" id="pie"> Contáctanos</a>
<td><a href="http://www.bestlightmexico.com.mx/iluminacion/noticias.php" id="pie"> Noticias</a>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>

<a href="http://www.bestlightmexico.com.mx/attachments/File/apblm.pdf" id="texto9" align="center"> Aviso de Privacidad<br><br></a>
</div>

<br>


</html>
