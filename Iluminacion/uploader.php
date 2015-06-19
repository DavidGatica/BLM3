<?php
	/*
	echo $_FILES['imagen']['name']."<br />";
	echo $_FILES['imagen']['type']."<br />";
	echo $_FILES['imagen']['tmp_name']."<br />";
	echo $_FILES['imagen']['size']."<br />";
	echo $_FILES['imagen']['error']."<br />";
	*/
	
	if($_FILES['imagen']['error'] > 0)
	{
		echo "ha ocurrido un error";
	}
	
	else
	{
		$permitidos = array("image/jpg","image/jpeg","image/gif","image/png");
		$limite_kb = 100000;
		
		if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
		{
			$ruta = "imagenesNoticias/".$_FILES['imagen']['name'];
			
			if(!file_exists($ruta))
			{
				$resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
				
				if($resultado)
				{
					echo "el archivo ha sido movido exitosamente";
				}
				
				else
				{
					echo "ocurrio un error al mover el archivo";
				}
				
			}
			
			else
			{
				echo $_FILES['imagen']['name'].", este archivo existe";
			}
			
		}

		else
		{
			echo "archivo no permitido, es de tipo prohibido o excede el tamaño";
		}
	
	}
	
?>