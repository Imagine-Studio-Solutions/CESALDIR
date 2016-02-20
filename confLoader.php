<?php
$ini = parse_ini_file('app.ini');

echo $ini['db_name'];
echo $ini['db_user'];
echo $ini['app_name'];

?>

