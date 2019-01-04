<?php
    session_start();
    if(!isset($_SESSION['name'])){
        echo "<script>location.href='../../index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Correcion de facturas</title>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <!-- Compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

        <!-- Compiled and minified JavaScript -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

      	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    </head>
    <body>
        <?php include '../nav_bar2.php'; ?>
        <center><a class="navbar-brand" style="color: #000;width: 90%; cursor: pointer;"  data-toggle="modal" data-target="#miModal">Hacer busqueda</a></center>


        <!-- <div class="form-group row"> -->
        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">A&ntilde;adir una anotaci&oacute;n</h4>
                    </div>
                    <div class="modal-body">
                        <form name="ejemplo" action="#" method="POST">
                            <input type="search" class="form-control" name="busqueda">
                            <br>
                            <center><input type="submit" value="Buscar"></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->

        <br>

        <?php include '../../includes/correccion_client.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
