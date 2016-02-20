<?php
ob_start();
session_start();	
//NOS CONECTAMOS CON LA BASE UNA SOLA VEZ	 
$connection = db_connect();

//SOLICITAMOS TODOS LOS QUERYS DE LA PAGINA
$QUERYnombreSitio = "SELECT username AS user FROM cs_user where user_id=1";


//EJECUTAMOS TODOS LOS QUERY
$nombreSitio = mysqli_query($connection, $QUERYnombreSitio) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($connection), E_USER_ERROR);

$row = mysqli_fetch_assoc($nombreSitio);
$nombre = $row['user'];	
	

//SE PONE TODO EN SESSION


session_regenerate_id();
$_SESSION['sitio'] = $nombre;
session_write_close();

header('Location: http://cesaldir.imagine-studio-solutions.com/home.php');
	
?>