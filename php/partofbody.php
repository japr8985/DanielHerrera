<?php include ('_validar_session.php'); ?>
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
    <script type="text/javascript" src="../stylesheet/js/game_body.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/partofbody.css">
</head>
<body>
	<?php include("_menu.php"); ?>
	<div class="col-xs-9">
        <div class="row">
            <div class="col-xs-6">
                <center>
                <img src="../stylesheet/images/body/body.png" class="img-responsive" width="300" height="700" border="0" usemap="#map" />
                </center>
                 <!-- para el mapeo de la imagen -->
                <map name="map">
                <!-- #$-:Image map file created by GIMP Image Map plug-in -->
                <!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
                <!-- #$-:Please do not edit lines starting with "#$" -->
                <!-- #$VERSION:2.3 -->
                    <area shape="rect" coords="89,264,219,353" id="chest" onClick="bodyPart(this)" />
                    <area shape="poly" coords="86,321,92,353,75,399,56,423,28,415,49,355,75,282" id="Arm" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="220,322,232,285,279,417,250,424,215,352" id="Arm" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="126,202,183,232" id="mouth" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="135,184,161,200" id="nose" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="122,146,109,155,108,175,115,183,126,183,139,179,140,170,137,152" id="Eye" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="174,145,165,152,161,180,189,182,192,163,188,148,179,144" id="Eye" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="87,163,75,171,78,186,90,196" id="Ear" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="217,164,224,160,226,183,217,189,217,179" id="Ear" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="87,146,87,163,79,164,74,174,77,185,91,196,100,217,68,190,63,174,63,135,51,156,46,133,53,108,73,85,65,85,88,69,63,81,75,63,114,44,132,41,124,35,95,37,132,23,179,23,200,36,190,20,208,24,214,43,236,48,248,64,224,61,249,82,256,98,259,112,248,107,260,132,260,157,249,142,251,167,239,197,220,218,206,219,216,192,224,188,228,169,226,160,217,163,216,139,199,100,188,117,175,107,173,94,156,101,146,115,132,100,114,107,95,133,94,150,90,148" id="hair" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="82,474,138,612" id="Leg" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="172,473,222,613" id="Leg" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="250,424,246,449,250,460,256,459,256,467,260,477,265,475,272,473,286,451,279,417,265,421" id="Hand" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="28,415,56,423,60,455,55,459,50,468,43,476,22,458,20,439" id="Hand" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="127,243,184,257" id="neck" onClick="bodyPart(this)"/>
                    <area shape="poly" coords="129,103,112,113,98,135,95,150,95,154,90,151,91,188,108,224,126,240,180,240,204,219,213,197,215,152,199,106,188,120,170,98,155,106,145,120,136,112" id="face" onClick="bodyPart(this)"/>
                    <area shape="rect" coords="69,614,239,677" id="foot" onClick="bodyPart(this)"/>
                </map>
                <hr>
                <center style="vertical-align:middle;">
                    <input type="text" id="bodypart" class="form-control" style="text-align:center;"></input>
                </center>
            </div>
            <div class="col-xs-6">
                
            </div>
        </div>
        
       
        
	</div>
</body>
</html>