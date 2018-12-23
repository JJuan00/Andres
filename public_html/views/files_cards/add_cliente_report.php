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
        <title>Añadir facturacion</title>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <script>
        $(document).on('ready',function(){

  $('#btn-ingresar').click(function(){
    var url = "../../includes/add_cliente.php";

    $.ajax({
       type: "POST",
       url: url,
       data: $("#formulario").serialize(),
       success: function(data)
       {
         $('#resp').html(data);
       }
     });
  });
});
       </script>
    </head>
    <body>
        <?php include '../nav_bar2.php'; ?>
        <br><br>
        <form method="POST" id="formulario">
            <div align="center">
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="cod_factura">Codigo de la factura.</label>
                      <input type="text" class="form-control" name="cod_factura" placeholder="Codigo factura" id="cod_factura">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="cc">C&eacute;dula.</label>
                      <input type="text" class="form-control" placeholder="Cedula" name="cc" id="cc">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                  </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <input type="button" class="btn btn-primary btn-block" name="btn-ingresar" id="btn-ingresar" value="Registrar">
                </div>
            </div>
        </form>

        <div id="resp"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
