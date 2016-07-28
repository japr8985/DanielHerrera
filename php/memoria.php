<?php 
include ('_validar_session.php');
 ?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tesis Daniel</title>
    <link href="../stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <script src="../stylesheet/js/jquery-1-11-03.js"></script>
    <script src="../stylesheet/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/menu.css">
    <script type="text/javascript" src="../stylesheet/js/game_memoria.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/game_memory.css">
</head>
<body>
    <?php include('_menu.php') ?>
        <div class="col-sm-9 col-md-9">
            <div class="well"><!-- PANEL DEJUEGOS -->
                <div id="memory_board">
                    <script>newBoard();</script>
                </div>
            </div>
        </div>
    <audio id="reproductor"></audio>
</body>
</html>