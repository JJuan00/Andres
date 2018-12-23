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
        <form action="../../includes/process.php" method="POST">
            <input type="hidden" name="id" value=<?php echo "\"".$TempId."\""; ?> >
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
