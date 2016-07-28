<?php 
include('../conexion/conexion.php');
session_start();
$user = $_POST['user'];
$pass = $_POST['password'];

if ((!empty($user))&& (!empty($pass))) {
	$sql = "SELECT * from usuarios where name='$user' and pass='$pass'";
	$result = $mysqli->query($sql) or die('Error: '.mysql_error());
	$row = $result->fetch_row();
	if ($row[0]!='') {
		$_SESSION['id']  = $row[0];
		$_SESSION['user']=$row[1];
		header('location: menu.php');
		exit();
	}
	else{
		echo "<script> 
				alert('Usuario no registrado');
				window.location.href = '../index.php';
				</script>";
	}
}
 ?>