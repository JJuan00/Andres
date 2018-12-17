<?php
    session_start();
    if(isset($_SESSION['name'])){
        echo "<script>location.href='../views/home.php';</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion</title>

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="main.js"></script>
</head>
<body>
    <?php
        if(isset($_SESSION['temp_username_temp_session'])){
            $_SESSION['temp_username_temp_session'] = "";
        }
    ?>
    <?php

        if(isset($_SESSION['temp_username_temp_inicio'])){
            $tempUserSession2 = $_SESSION['temp_username_temp_inicio'];
        }else{
            $tempUserSession2 = "";
        }
    ?>

<div class="panel">
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Inicio</h1></div>
        <form method="POST" action="includes/process.php">
    		<div class="form">
    			<input placeholder='Username' type="text" name="username" required="username" value=<?php echo "\"".$tempUserSession2."\""; ?> >
    			<input placeholder='Contrase&ntilde;a' type="password" name="password1" required="password1">
    			<button class="login" name="btn_inicio">Iniciar</button>
    		</div>
        </form>
        <div class="fack"><a href="views/registro.php"><i class="fa fa-question-circle"></i>¿No estas registrado?</a></div>
		<div class="fack"><a href="#"><i class="fa fa-question-circle"></i>¿Olvidaste tu contrase&ntilde;a</a></div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php
    if(isset($_SESSION['incorrect'])){
        echo '<script  src="js/index.js"></script>';
        $_SESSION['incorrect'] = 1;
    }
?>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    
</body>
</html>