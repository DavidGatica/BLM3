<?php
if (!isset($_SESSION['usuario'])) {
    header('Location: log_in.php');
}

header('Content-Type: text/html; charset=UTF-8');
//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();
$usuario = $_SESSION['usuario'];

$sql = "SELECT nombre, apellido_p, apellido_m, permiso FROM Usuarios WHERE id_usuario = '$usuario'";
$resultado = query($sql, $conexion);
$campo = mysql_fetch_array($resultado);
$permiso1 = $campo['permiso'];
$nombre = $campo['nombre'];
$apellido_p = $campo['apellido_p'];
$apellido_m = $campo['apellido_m'];
?>

<div class="datagrid">
    <table width="50em"> 
        <tr>
        <thead>
        <th width='4%'><h3>No.</h3></th>        
        <th width='10%'><h3>Empresa</h3></th>
		<th width='4%'><h3>RFC</h3></th>
        <th width='43%'><h3>Dirección</h3></th>
        <th width='43%'><h3>Contacto</h3></th>
        <?php
        if ($permiso1 == 1) {
            echo "<th width='10%'><h3>Vendedor</h";
        }
        ?>
        </thead>
        </tr>
        <?php
        $cont = 2;
        if ($permiso1 == 2) {
            echo "<div align='center'><div id='caja_cat' align='center'>Clientes de <br>$nombre $apellido_p $apellido_m:</div></div><br>";
            $sql = "SELECT * FROM Clientes WHERE id_usuario = '$usuario' and desactivado='0'";
        } else {
            echo "<div align='center'><div id='caja_cat''>Todos los Clientes:</div></div><br>";
            $sql = "SELECT * FROM Clientes WHERE desactivado = 0";
        }
        $resultado = query($sql, $conexion);
        while ($campo = mysql_fetch_array($resultado)) {
            if ($cont % 2 == 0) {
                $id_usuario = $campo['id_usuario'];
                $id_direccion = $campo['id_direccion'];
				$id_contacto = $campo['id_contacto'];
				$id_num_cliente = $campo['id_num_cliente'];
				$permiso = $campo['permiso'];
				
				
                $sqla = "SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
                $resultadoa = query($sqla, $conexion);
                $campoa = mysql_fetch_array($resultadoa);
                $calle_num = $campoa['calle_num'];
                $num_int = $campoa['num_int'];
                $num_ext = $campoa['num_ext'];
                $colonia = $campoa['colonia'];
                $municipio = $campoa['municipio'];
                $estado = $campoa['estado'];
                $cp = $campoa['cp'];



                
                $sqlb = "SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
                $resultadob = query($sqlb, $conexion);
                $campob = mysql_fetch_array($resultadob);
                $nombre_c = $campob['nombre_c'];
                $departamento = $campob['departamento'];
                $telefono1 = $campob['telefono1'];
                $telefono2 = $campob['telefono2'];
                $e_mail_c = $campob['e_mail_c'];

                $sql5 = "select * from Usuarios where id_usuario= '$id_usuario'";
                $resultado5 = query($sql5, $conexion);
                $campo5 = mysql_fetch_array($resultado5);
                $nombre_usuario = "" . $campo5['nombre'] . " " . $campo5['apellido_p'];


                echo
                "<tr>" .
                "<td id='sombra2'>" . $campo['id_num_cliente'] . "</td>" .
				"<td id='sombra2'>" . $campo['empresa'] . "</td>" .
				"<td id='sombra2'>" . $campo['id_cliente'] . "</td>" .
                "<td id='sombra2'>" . $calle_num . "--" . $colonia . "--" . $municipio . "--" . $estado . "--" . $cp . "</td>" .
                "<td id='sombra2'>" . $nombre_c . "-" . $departamento . "--" . $telefono1 . "--" . $telefono2 . "--" . $e_mail_c . "</td>";
                if ($permiso1 == 1) {
                    echo "<td id='sombra2'>" . $permiso . " " .$nombre_usuario . "</td>";
                }
                echo "<tr>";
            } else {
				$id_usuario = $campo['id_usuario'];
                $id_direccion = $campo['id_direccion'];
				$id_contacto = $campo['id_contacto'];
				
				$sqlc = "SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
                $resultadoc = query($sqlc, $conexion);
                $campoc = mysql_fetch_array($resultadoc);
                $nombre_c = $campoc['nombre_c'];
                $departamento = $campoc['departamento'];
                $telefono1 = $campoc['telefono1'];
                $telefono2 = $campoc['telefono2'];
                $e_mail_c = $campoc['e_mail_c'];
				
                $id_direccion = $campo['id_direccion'];
                $sql6 = "SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
                $resultado6 = query($sql6, $conexion);
                $campo6 = mysql_fetch_array($resultado6);
                $calle_num = $campo6['calle_num'];
                $num_int = $campo6['num_int'];
                $num_ext = $campo6['num_ext'];
                $colonia = $campo6['colonia'];
                $municipio = $campo6['municipio'];
                $estado = $campo6['estado'];
                $cp = $campo6['cp'];

                echo
                "<tr>" .
				"<td id='sombra2'>" . $campo['id_num_cliente'] . "</td>" .				
                "<td id='sombra'>" . $campo['empresa'] . "</td>" .
                "<td id='sombra'>" . $campo['id_cliente'] . "</td>" .
                "<td id='sombra'>" . $calle_num . "--" . $colonia . "--" . $municipio . "--" . $estado . "--" . $cp . "</td>" .
                "<td id='sombra'>" . $nombre_c . "-" . $departamento . "--" . $telefono1 . "--" . $telefono2 . "--" . $e_mail_c . "</td>";
                if ($permiso1 == 1) {
                    echo "<td id='sombra'>" . $permiso . " " .$nombre_usuario . "</td>";
                }
                echo "<tr>";
            }
            $cont++;
        }
        ?>
    </table>
</div>
