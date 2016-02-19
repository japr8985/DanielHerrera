<?php 
include('../conexion/conexion.php');

$username = $_POST['username'];
$pass 	  = $_POST['password'];
$rpass	  = $_POST['rpassword'];
$email    = $_POST['email'];
$RealName = $_POST['name']." ".$_POST['lastname'];

//buscando si el correo ya este registrado
$sql 		= "SELECT * from usuarios where email = '$email'";
$query 		= mysql_query($sql);
$result 	= mysql_fetch_row($query);
if ($result[0]=='') {//si no trae devuelta ningun valor
	//quiere decir que ese correo no esta registrado
	//----------------------------------------------
	//se procede a registrar
	//-----Validadndo contraseñas
	if ($pass==$rpass) {//si las contraseñas son iguales
		//se puede registrar
		$sql = "INSERT INTO usuarios(name,pass,email,realname) VALUES ('$username','$pass','$email','$RealName')";
		if (mysql_query($sql)) {
			header('location: ../index.php');
			}
		else{

			die("Error: ".mysql_error());
			}
		}
	else
		echo "contraseñas diferentes";

	}
	else
		echo "cuenta de correo ya registrada";

 ?>