<?php 
require_once 'conexion.php';

$link = mysqli_connect($hostname, $username, $password, $database);
$id = $_POST['id'];
$red = $_POST['red'];
if($red === 'twitter'){
	$red = 'pbs.twimg.com';
}
if($red === 'youtube'){
	$red = 'yt3';
}

if (mysqli_connect_errno()) {
    echo  "Conexión fallida: %s\n", mysqli_connect_error();
    exit();
}

$query = 'SELECT * FROM core_redes_sociales WHERE persona_id="'.$id.'" AND rrss_img LIKE "%'.$red.'%" ORDER BY reach DESC';
$result = mysqli_query($link, $query);


$row= mysqli_fetch_array($result, MYSQLI_BOTH);

while($row = mysqli_fetch_row($result)){
	if($row[2]!=null)
	echo '<p style="color:white">'.$row[2].'  - Likes '.$row[5].'  - Reach '.$row[12].'</p>';
}
mysqli_free_result($result);

mysqli_close($link);
?>