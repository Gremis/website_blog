<?php

require('conect.php');

$sql = "SELECT * FROM users";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

var_dump($users);


?>