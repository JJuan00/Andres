<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="main.js"></script>
</head>
<body>
	<?php

		if(isset($_SESSION['temp_username_temp_session'])){
			$tempUserSession = $_SESSION['temp_username_temp_session'];
		}else{
			$tempUserSession = "";
		}
	?>

<div class="panel">
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Registro</h1></div>
        <form method="POST" action="../includes/process.php">
    		<div class="form">
    			<input placeholder='Username' type="text" name="username" required="username" value=<?php echo "\"".$tempUserSession."\""; ?> >
    			<input placeholder='Nombre' type="text" name="name" required="name">
    			<input placeholder='Contrase&ntilde;a' type="password" name="password1" required="password1">
    			<input placeholder='Repetir contrase&ntilde;a' type="password" name="password2" required="password2">
    			<button class="login" name="btn_registro">Registrar</button>
    		</div>
        </form>
        <div class="fack"><a href="../index.php"><i class="fa fa-long-arrow-left"></i>Volver al inicio</a></div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/index.js"></script>



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    
</body>
</html>