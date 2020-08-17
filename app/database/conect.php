<?php

$host = 'localhost';
$user = 'root';
$pass = 'test';
$db_name = 'blog';


$conexion = new mysqli($host, $user, $pass, $db_name);

if ($conexion->connect_error){
    die('Database connection error: '. $conexion->connect_error);
}


?>