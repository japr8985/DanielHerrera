<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                    </span>Games</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-pencil text-primary"></span><a href="seleccion.php" >Seleccion</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-flash text-success"></span><a href="memoria.php" onClick="">Memoria</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-file text-info"></span><a href="colors.php">Colors</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-file text-info"></span><a href="partofbody.php">Part of body</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                    </span><?php echo $_SESSION['user'] ?></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-trash text-danger"></span><a href="cerrar_sesion.php" class="text-danger">
                                    Cerrar Sesion</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>