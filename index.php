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
</head>
<body>
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="php/login.php" method="POST" role="login">
          <img src="stylesheet/images/logo_login.jpg" class="img-responsive" alt="" />
          
          <input type="text"      name="user"     placeholder="Usuario" required class="form-control input-lg" value="" />

          <input type="password"  name="password" placeholder="Password" class="form-control input-lg" id="password"  required="" />

          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Iniciar Sesion</button>
          <div>
            <a href="registrar.php">Crear cuenta</a> 
            <!-- or <a href="#">reset password</a> -->
          </div>

        </form>

        <div class="form-links">
        </div>
      </section>  
      </div>
      <div class="col-md-4"></div>
  </div>
</div>
</body>
</html>