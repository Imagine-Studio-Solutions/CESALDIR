<?php
//VERSION SISTEMA CESALDIR
define('VERSION', '1.0');

// VAMOS A TRAER LA INFORMACION DE CONFIG UNA SOLA VEZ 'require_once'
if (file_exists('config.php')) {
	require_once('config.php');
}

// COMENZAMOS EL SISTEMA
require_once(DIR_SYSTEM . 'startup.php');
	
?>