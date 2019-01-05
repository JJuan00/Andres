<?php
    session_start();
        if(!isset($_SESSION['name'])){
            echo "<script>location.href='../../index.php';</script>";
        }else{
            $TempUsername = $_SESSION['username'];
            $TempName = $_SESSION['name'];
            $TempId = $_SESSION['idU'];
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <title>Atualizacion usuario</title>
    </head>
    <body>
        <?php
    		include '../nav_bar2.php';
    	?>
        <!-- https://codepen.io/andytran/pen/pJLEbZ -->
        <br><br>
        <form method="POST" action="../../includes/process.php">
            <input type="hidden" id="id" name="id" value=<?php echo "\"".$TempId."\""; ?> >
            <div align="center">
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" value=<?php echo "\"".$TempUsername."\""." "; ?> id="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label for="email">Nombre</label>
                      <input type="text" class="form-control" name="name" value=<?php echo "\"".$TempName."\""." "; ?> id="email">
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                      <label for="pwd">Contrase&ntilde;a</label>
                      <input type="password" class="form-control" name="password" id="pwd" required>
                  </div>
                </div>
                <br>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block" name="btn_actualizar">Actualizar</button>
                </div>
            </div>

      </form>

      <!-- <script type="text/javascript">
          function actualizar()
          {
            var formData = new FormData();
            formData.append("id", document.getElementById('id').value);
            formData.append("username", document.getElementById('username').value);
            formData.append("name", document.getElementById('email').value); 
            formData.append("password", document.getElementById('pwd').value); 
            var request = new XMLHttpRequest();
            request.open("POST", "http://127.0.0.1/empresa/includes/process.php");
            request.onload = function(oEvent) {
                if (request.status == 200) {
                    // console.log(JSON.parse(oEvent.currentTarget.response));
                    var code = document.getElementById('username').value;
                    var name = document.getElementById('email').value;
                    var cc = document.getElementById('pwd').value;
                    if (code == "" || name == "" || cc == "") {
                      alertify.error('Hay campos vacios, rectifique los campos.'); 
                    }else{
                      alertify.success('Actualizado correctamente.');  
                      document.getElementById('username').value = "";
                      document.getElementById('email').value = "";
                      document.getElementById('pwd').value = "";
                    }
                } else {
                  alertify.error('Lo sentimos, hay algun error.');                
                }
              };
            request.send(formData);
          }
        </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
