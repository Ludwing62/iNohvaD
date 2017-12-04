<?php
$host = "localhost";
$db_name = "inohvamerida";
$username = "root";
$password = "";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//para manejar el error de conexion
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>