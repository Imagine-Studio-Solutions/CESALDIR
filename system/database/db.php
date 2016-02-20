<?php
function db_connect() {
    // COMO ESTATICA PARA SOLO CONECTARNOS UNA VEZ
    static $connection;

    // NOS CONECTAMOS
    if(!isset($connection)) {
        $connection = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    }

    // ERROR
    if($connection === false) {
       return mysqli_connect_error(); 
    }    
    
    return $connection;
}
?>