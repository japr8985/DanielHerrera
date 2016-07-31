<?php 
include('_validar_session.php');
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
    <script type="text/javascript" src="../stylesheet/js/game_seleccion.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/game_seleccion.css">
</head>
    <body>
        <?php include('_menu.php'); ?>
        <div class="col-sm-9 col-md-9">
            <div class="row im-centered"><!-- numero a mostrar -->
                <h1>
                    <p id="Number_to_Show"></p>
                </h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <button class="btn btn-default btn-lg btn-block" id="op_1" onClick="verificar(this)" value="x"/> 
                </div>
                <div class="col-sm-6 col-md-6">
                    <button class="btn btn-default btn-lg btn-block" id="op_2" onClick="verificar(this)" value="x"/> 
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <button class="btn btn-default btn-lg btn-block" id="op_3" onClick="verificar(this)" value="x"/> 
                </div>
                <div class="col-sm-6 col-md-6">
                    <button class="btn btn-default btn-lg btn-block" id="op_4" onClick="verificar(this)" value="x"/> 
                </div>
            </div>  
            </div>
        </div>
    </body>
<script type="text/javascript">

    /*-------------------------------------------------------------------*/
    /*---------------------Funciones de asignacion de botones------------*/
    /*-------------------------------------------------------------------*/
    var btn_op1 = document.getElementById("op_1");
    var btn_op2 = document.getElementById("op_2");
    var btn_op3 = document.getElementById("op_3");
    var btn_op4 = document.getElementById("op_4");
    var btns = [btn_op1,btn_op2,btn_op3,btn_op4];
    //inciar juego
    init();
    //-------------------------------------------------------------------
    function verificar(val){
    var a = document.getElementById(val.id).value;
    var b = document.getElementById("Number_to_Show").innerHTML;
    if (a==b) {
        alert('Good');
        init();
    }
    else{
        //si los valores son diferentes
        //activa la propiedad disabled 
        document.getElementById(val.id).disabled = true;
        }
    }


</script>
</html>