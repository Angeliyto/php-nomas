 <?php

 $host = "localhost";
 $user = "root";
 $password ="";
 $database = "php_nomas";

 $conexion = new mysqli ($host, $user, $password, $database);

 if ($conexion->connect_error){
    die("error de conexion: " . $conexion->connect_error);
 }
 ?>

