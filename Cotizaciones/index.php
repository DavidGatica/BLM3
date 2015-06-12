<?php
	session_start();
	
	//incluimos el archivo con las funciones
	
	include ("funciones_mysql.php");
	
	//Funcion que conecta la base de datos
	
	$conexion = conectar();

	$atras="nada";

	if (!isset($_GET['sec']))
		$seccion = null;
	
	else
		$seccion = $_GET['sec'];


	if (!isset($_SESSION['usuario']))
		$id_usuario = null;
	
	else
		$id_usuario = $_SESSION['usuario'];


	if (!isset($_SESSION['permiso']))
		$permiso = NULL;
	
	else
		$permiso = $_SESSION['permiso'];

	$sql = "SELECT * FROM Version WHERE version_no = '$no_version'";
	$resultado = query($sql, $conexion);
	while ($campo = mysql_fetch_array($resultado)) 
	{
		$version = $campo['version'];
	}

	$sql = "SELECT * FROM Usuarios WHERE id_usuario = '$id_usuario'";
	$resultado = query($sql, $conexion);
	while ($campo = mysql_fetch_array($resultado)) 
	{
		$nombre = $campo['nombre'];
		$apellido_p = $campo['apellido_p'];
	}

	$nombreCompleto = $nombre. " " .$apellido_p; 
?>


<!DOCTYPE html >

<html>
	<head>
		<link rel="icon" type="image/png" href="images/ico.png" />
		<title>Consecutivo de cotizaciones</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />  
		<link href="stylenuevo.css" rel="stylesheet" type="text/css" />
	</head>

	<body> 	
		<script>
			function agregar_c() 
			{
				location.href = "?sec=alta";
			}
			
			function eliminar_c() 
			{
				location.href = "?sec=baja";
			}
			
			function modificar_c() 
			{
				location.href = "?sec=cambio";
			}
			
			function visualizar_c() 
			{
				location.href = "?sec=visualizarC";
			}
			
			function cotizaciones() 
			{
				location.href = "?sec=cotizaciones";
			}
			
			function cotizar() 
			{
				location.href = "?sec=cotizar";
			}
			
			function agregar_u() 
			{
				location.href = "?sec=altaus";
			}
			
			function eliminar_u() 
			{
				location.href = "?sec=bajaus";
			}
			
			function modificar_u() 
			{
				location.href = "?sec=cambious";
			}
			
			function agregar_p() 
			{
				location.href = "?sec=alta_p";
			}
			
			function eliminar_p() 
			{
				location.href = "?sec=baja_p";
			}
			
			function modificar_p() 
			{
				location.href = "?sec=cambio_p";
			}
			
			function ver_p() 
			{
				location.href = "?sec=verP";
			}	
			
			function log_in() {
				location.href = "?sec=log_in";
			}
			
			function cerrarSesion()
			{
				if (confirm("¿Realmente desea cerrar sesión?"))
				{
					document.location.href = 'cerrarsesion2.php';
				}

				else
				{
					document.location.href = 'index.php';
				}
			}
		</script>
		
		<div id="Contenido">
			<div id="encabezado_negro">
			
				<a href="http://www.bestlightmexico.com.mx" target="new">
					<img src="images/logo_encabezado.png" id="logo_encabezado">
				</a>
				
				<div class="linea_vertical"></div>
				
				<a href="index.php">
					<img src="images/1home.png" class="iconoi_encabezado lineaHover">
				</a>
				
				<div id="iconos">
					<?php
						if(isset($_SESSION['usuario']))
						{
							echo 
							'
								<img onclick="cotizar()" src="images/1generar.png" class="icono_encabezado lineaHover">
								
								<div class="linea_verticalfd"></div>
								
								<img onclick="cotizaciones()" src="images/1cotizaciones.png" class="icono_encabezado lineaHover">
								
								<div class="linea_verticalfd"></div>			
								
								<div class="mover">
								
									<img src="images/1clientes.png" class="icono_encabezado clientes lineaHover">
									
									<div class="agregar">
											<img onclick="agregar_c()" src="images/2anadir.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="eliminar">
											<img onclick="eliminar_c()" src="images/1eliminar.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div onclick="modificar_c()" class="modificar">
											<img src="images/1modificar.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="visualizar">
											<img onclick="visualizar_c()" src="images/1ver.png" class="icono_encabezado agregar sombraHover">
									</div>
										
								</div>
								
								<div class="linea_verticalfd"></div>
								
								<div class="mover2">
								
									<img src="images/1usuarios.png" class="icono_encabezado lineaHover">
									
									<div class="agregar">
											<img onclick="agregar_u()" src="images/2anadir.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="eliminar">
											<img onclick="eliminar_u()" src="images/1eliminar.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="modificar">
											<img onclick="modificar_u()" src="images/1modificar.png" class="icono_encabezado agregar sombraHover">
									</div>
								</div>
								
								<div class="linea_verticalfd"></div>
								
								<div class="mover">
								
									<img src="images/1productos.png" class="icono_encabezado lineaHover">
								
									<div class="agregar">
											<img onclick="agregar_p()" src="images/2anadir.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="eliminar">
											<img onclick="eliminar_p()" src="images/1eliminar.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="modificar">
											<img onclick="modificar_p()" src="images/1modificar.png" class="icono_encabezado agregar sombraHover">
									</div>
									
									<div class="visualizar">
											<img onclick="ver_p()" src="images/1ver.png" class="icono_encabezado agregar sombraHover">
									</div>
								
								</div>
								
								<div class="linea_verticalfd"></div>
								
								<img onclick="cerrarSesion()" src="images/1sesion.png" class="icono_encabezado lineaHover">
				</div>
							';
						}
				else
				{
					echo 
					'
						<div class="linea_verticalfd"></div>
						
						<img onclick="log_in()" src="images/1sesion.png" class="icono_encabezado lineaHover">
			</div>
					';
				}	
					?>
				
		</div>		
		
		<div id="contenidoCont">			                      

			<?php			
				if (!isset($_SESSION['usuario'])) 
				{
					require_once('log_in.php');
				}
				
				else
				{
					if ($seccion == null) 
					{
						require_once("home.php");
						$atras="algo";
					}
					
					if ($seccion == "log_in") 
					{
						require_once("log_in.php");
						$atras="algo";
					}

					if ($seccion == "alta") 
					{
						require_once("alta.php");
						$atras="algo";
					}
					
					if ($seccion == "baja") 
					{
						require_once("baja_ad.php");
						$atras="algo";
					}
					
					if ($seccion == "cambio") 
					{
						require_once("cambio_ad.php");
						$atras="algo";
					}
					
					if($seccion == "visualizarC")
					{
						require_once("cat_clientes.php");
						$atras="algo";
					}

					if ($seccion == "cotizaciones") 
					{
						require_once("cotizaciones-admin.php");
						$atras="algo";
					}

					if ($seccion == "cotizar") 
					{
						require_once("cotizar_ad.php");
						$atras="algo";
					}

					if ($seccion == "altaus") 
					{
						require_once("altaus.php");
						$atras="algo";
					}
					
					if ($seccion == "bajaus") 
					{
						require_once("bajaus.php");
						$atras="algo";
					}
					
					if ($seccion == "cambious") 
					{
						require_once("cambious.php");
						$atras="algo";
					}

					if ($seccion == "alta_p") 
					{
						require_once("alta_p.php");
						$atras="algo";
					}
					
					if ($seccion == "baja_p") 
					{
						require_once("baja_p.php");
						$atras="algo";
					}
					
					if ($seccion == "cambio_p") 
					{
						require_once("cambio_p.php");
						$atras="algo";
					}

					if ($seccion == "creditos") 
					{
						require_once("creditos.php");
						$atras="algo";
					}
					
					if ($seccion == "version") 
					{
						require_once("version.php");
						$atras="algo";
					}						
					
					if ($seccion == "verP") 
					{
						require_once("cat_prod.php");
						$atras="algo";
					}	
				}				
			?>    		

		</div>
		
		<footer>
			
			<?php

				if($atras=="algo")
				{
					echo '
						<div class="efectArrow">
							<a href="
						';
			?>
			
			<?=$_SERVER['HTTP_REFERER']?>
			
			<?php 
					echo 
					'
							">
								<img src="images/arrowLeft.png" id="arrowLeft">
							</a>
						</div>
							
						<div class="lineaVerticalPie"></div>
					'; 
				}
				
				echo 
				"
					<div id='derechaFooter'>
						<div class='lineaVerticalPie'></div>
				";
				
				if(isset($id_usuario))
				{
					echo 
					"
						<div id='sesionFooter'>"
							. $nombreCompleto .
						"</div>
					";
				}
				
				else
				{
					echo 
					"
						<div id='sesionFooter'>
							Inicie sesión
						</div>
					";
				}
				
				echo 
				"
						<div class='lineaVerticalPie'></div>
				";
				
				echo 
				"
						<div id='versionFooter'>
							Version 1.0.0
						</div>
					</div>
				";
			?>
		</footer>	
    </body>
</html>

