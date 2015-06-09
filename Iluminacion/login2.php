<?php

session_start();

//incluimos el archivo con las funciones
include ("funciones_mysql.php");

//Funcion que conecta la base de datos
$conexion = conectar();

if($_POST['usuario']==null || $_POST['password']==null ){
	$usuario="ninguno";
	$password="ninguno";
}else{
	
$usuario=$_POST['usuario'];
$password=$_POST['password'];
}

//GUARDA QUERY EN $query
$query = "SELECT `id_usuario`, `password` FROM `Registrar` WHERE `id_usuario`='$usuario' and `password`='$password'";

//GENERA LA QUERY
$result = mysql_query($query);

//LEE LA QUERY
while ($row = mysql_fetch_assoc($result)) {

//SI EXISTE RESULTADO HACE EL IF	
    if ($row['id_usuario'] == $usuario) {
        $id_usuario = $row['id_usuario'];
        $pass = $row['password'];
    }
}




if ($usuario == 'ninguno' || $pass == 'ninguno') {
    session_destroy();
    header("Location: login4.html");
} else {

//GUARDA QUERY EN $query
    $query = "SELECT * FROM `Usuarios` WHERE `id_usuario`='$id_usuario' ";

//GENERA LA QUERY
    $result = mysql_query($query);

//SI EXISTE RESULTADO GUARDA LAS VARIABLES
    if ($row = mysql_fetch_assoc($result)) {
        $tipo_usuario = $row['tipo_usuario'];
    }


    if ($tipo_usuario == 'Usuario' ) {
        $_SESSION['tipo_usuario'] = 'Usuario';
        header("Location: index.html");
    }

     if ($tipo_usuario == 'Trabajador' ) {
        $_SESSION['tipo_usuario'] = 'Trabajador';
        header("Location: index.html");
    }

    
}
?>
