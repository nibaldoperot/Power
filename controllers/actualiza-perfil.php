<?php 
require_once 'conexion.php';

$link = mysqli_connect($hostname, $username, $password, $database);
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$region = $_POST['region'];
$comuna = $_POST['comuna'];
$descripcion = $_POST['descripcion'];
  
if (mysqli_connect_errno()) {
    echo  "Conexión fallida: %s\n", mysqli_connect_error();
    exit();
}

$query = 'UPDATE persona SET nombre="'.$nombre.'", region="'.$region.'", comuna="'.$comuna.'", descripcion="'.$descripcion.'" WHERE id="'.$id.'"';
$query_login = 'UPDATE login SET user="'.$nombre.'" WHERE correo= (SELECT correo FROM persona WHERE id="'.$id.'" LIMIT 1)';
if(mysqli_query($link, $query) && mysqli_query($link, $query_login) ){
	echo 'exito';
}else{
	echo 'error';
}

mysqli_free_result($result);

mysqli_close($link);
?>