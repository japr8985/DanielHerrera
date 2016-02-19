<?php 
session_start();
if (isset($_SESSION['user'])) {
  header('location: php/menu.php');
}
 ?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tesis Daniel</title>
    <link href="stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet/css/global.css">
    <script src="stylesheet/js/jquery-1-11-03.js"></script>
    <script src="stylesheet/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="stylesheet/js/validar_crear_usuario.js"></script>
    <script type="text/javascript" src="stylesheet/js/jquery.validate.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row" id="pwd-container">

		<div class="col-md-4"></div>
			<div class="col-md-4">
				<section class="login-form">
					<form method="post" action="php/nuevo_usuario.php" method="POST" role="login" id="form">
						<img src="stylesheet/images/logo_login.jpg" class="img-responsive" alt="" />
						<input type="text" 		name="username" 	id="username" placeholder="Username" class="form-control input-lg"  >
						<input type="password"  name="password" 	id="password" placeholder="Password" class="form-control input-lg"    />			
						<input type="password"  name="rpassword" 	id="rpassword" placeholder="Repeat Password" class="form-control input-lg"    />
						<input type="email" 	name="email"		id="email" 	  placeholder="Email" class="form-control input-lg" >
						<input type="text" 		name="name" 		id="name"     placeholder="Name" class="form-control input-lg"  >
						<input type="text" 		name="lastname"     id="lastname" placeholder="Last Name" class="form-control input-lg"  >
						<button class="btn btn-lg btn-primary btn-block" id="btn">Crear Cuenta</button>
					</form>
				</section>  
			</div>
	</div>
</div>
</body>
</html>