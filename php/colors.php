<?php session_start(); ?>
<html>
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tesis Daniel</title>
    <link href="../stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/menu.css">
    <script type="text/javascript" src="../stylesheet/js/jquery-1-11-03.js"></script>
    <script type="text/javascript" src="../stylesheet/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../stylesheet/js/game_colors.js"></script>
</head>
<body>
	<?php include("_menu.php"); ?>
    <div class="col-xs-9">
		<div class="container">
            <div class="row center-block no-float ">
                <div class="page-header col-md-7">
                    <h1>What is the color of ...?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 center-block no-float">
                    <img src="" class="img-responsive img-circle" alt="" id="pic"></img>
                </div>
            </div>
            <div class="row">
                <div id="div1"class="result" ondrop="drop(color,colorDrag)" ondragover="allowDrop(event)"></div>
            </div>
            <div class="row"><!--Paletas de colores  -->
                <div id="opc1"class="col-md-3 opcColor" draggable="true" ondragstart="drag(1)"></div>
                <div id="opc2"class="col-md-3 opcColor" draggable="true" ondragstart="drag(2)"></div>
                <div id="opc3"class="col-md-3 opcColor" draggable="true" ondragstart="drag(3)"></div>
                <div id="opc4"class="col-md-3 opcColor" draggable="true" ondragstart="drag(4)"></div>
            </div>
        </div>

	</div>
</body>
<script type="text/javascript">
    //seleccion de imagen a mostrar
    var x = getImgRandom(img);
    //nombre del color
    var color = getColorOfImage(x);
    //array de colores para las opciones
    var colors = randomOpc(color);
    console.log(x);
    //asignacion de imagen
    $('#pic').attr('src',x);
    //rellenando los div de los colores correspondiente
    for (var i = 0; i < colors.length; i++) {
        var z = i+1;
        $('#opc'+z).css('background-color',colors[i]);
    };
</script>
</html>