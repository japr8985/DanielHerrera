<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tesisdaniel";

/*$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/
$mysqli = new mysqli($host,$user,$pass,$db);
if ($mysqli->connect_errno) {
	echo "Error: ".$mysqli->connect_error;
}
 ?>