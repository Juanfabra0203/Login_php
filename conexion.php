
<?php

$host ="localhost";
$user = "root";
$pass = "";
$db = "login";

$conexion = new mysqli($host,$user,$pass,db);

if($conexion -> $conexion->error){
    die("Conexion fallida" . $conexion -> $conexion->error);
}


?>