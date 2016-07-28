<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                    </span>Juegos</a>
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
                                <span class="glyphicon glyphicon-comment text-success"></span><a href="#">Comments</a>
                                
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                    </span>Modules</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">Orders</a> <span class="label label-success">$ 320</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Invoices</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Shipments</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Tex</a>
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
                                <!-- <a href="#">Change Password</a> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Puntajes</a> <span class="label label-info">5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Import/Export</a>
                            </td>
                        </tr>
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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                    </span>Reports</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-usd"></span><td>
                                <span id="score"></span>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-user"></span><a href="#">Customers</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-tasks"></span><a href="#">Products</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-shopping-cart"></span><a href="#">Shopping Cart</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>