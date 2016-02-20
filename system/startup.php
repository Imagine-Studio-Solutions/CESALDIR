<?php 
 // Reportamos Errores
error_reporting(E_ALL);

// Verificamos la version de PHP del servidor
if (version_compare(phpversion(), '5.1.0', '<') == true) {
	exit('PHP5.1+ Required');
}
require_once(DIR_SYSTEM . 'database/db.php');
require_once(DIR_SYSTEM . 'database/loadIndex.php');

?>