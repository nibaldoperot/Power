<?php 
require_once 'conexion.php';

$link = mysqli_connect($hostname, $username, $password, $database);
$id = $_POST['id'];


if (mysqli_connect_errno()) {
    echo  "Conexión fallida: %s\n", mysqli_connect_error();
    exit();
}


$query = 'SELECT * FROM persona WHERE id="'.$id.'" LIMIT 1';
$result = mysqli_query($link, $query);


$row= mysqli_fetch_array($result, MYSQLI_BOTH);

if($row[3] === '1')
	echo '
	<p style="width: 100%"  id="correo" placeholder="correo" disabled>'.$row[6].'</p>
	<input style="width: 100%" value="'.$row[5].'" id="nombre" placeholder="nombre" disabled></input>
	<input style="width: 100%" value="'.$row[15].'" id="region" placeholder="region" disabled></input>
	<input style="width: 100%" value="'.$row[16].'" id="comuna" placeholder="comuna" disabled></input>
	<textarea  style="width: 100%"  " id="descripcion" placeholder="descripcion" disabled>'.$row[14].'</textarea>';

mysqli_free_result($result);

mysqli_close($link);
?>