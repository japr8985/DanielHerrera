<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tesisdaniel";

$con = mysql_connect($host,$user,$pass) or die("Error: ".mysql_error());
$con_db = mysql_select_db($db,$con) or die("Error: ".mysql_error());

 ?>