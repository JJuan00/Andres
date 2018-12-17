<?php
	session_start();
	require '../conexion/conexion.php';
	if(isset($_POST['btn_inicio'])){
		/*recoleccion de input*/
		$_SESSION['temp_username_temp_inicio'] = "";
		$_SESSION['temp_username_temp_session'] = "";
		if($_SERVER['REQUEST_METHOD'] == 'POST'){ /*Envios por metodo POST*/
			$username = $_POST['username'];
			$password = $_POST['password1'];
			$consulta = $conexion-> prepare("SELECT * FROM user_gestion WHERE username = :username AND password = :password");
			/*Encripto la contraseña para compararla*/
			$TempPasswordInicio = md5($password);
			$consulta ->execute(array(':username' => $username, ':password' => $TempPasswordInicio));
			$stmt = $conexion->prepare("SELECT nombre FROM user_gestion WHERE username = '$username'");
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			while($row = $stmt->fetch()){
				$nombre = $row['nombre'];
			}

			$resultado = $consulta ->fetch();
			if($resultado !== false){
				$_SESSION['username'] = $username;
				$_SESSION['name'] = $nombre;
				echo "<script>location.href='../views/home.php';</script>";
			}else{
				header('Location: ../index.php');
				$_SESSION['incorrect'] = 0;
			}
			// echo $TempPasswordInicio;
		}
		
	}elseif(isset($_POST['btn_registro'])){
		/*recoleccion de input*/
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$name = $_POST['name'];
		/*Proceso con el mysql*/
		/*Verificar si esta registrado el username*/
		$sql = "SELECT COUNT(*) FROM user_gestion WHERE username = :username";
		/*Preparo la sentencia*/
		$stmt = $conexion->prepare($sql);
		/*Ejecuto la sentencia*/
		$stmt->execute(array(':username' => $username));
		/*Ejecuto el fetch de la asoc*/
		$result = $stmt->fetchColumn();
    
		if($result != 0){ /*Si en el campo de la colmuna existe el usuario*/
			echo "<script>alert('Ya estas registrado.')</script>";
    		echo "<script>location.href='../index.php';</script>";
    		$_SESSION['temp_username_temp_inicio'] = $username;
		}else{
			if($password1 == $password2){
				$TempPassword = md5($password1);
				$sql = $conexion-> prepare("INSERT INTO user_gestion(username, nombre, password)VALUES(:username, :name, :password1)");
				$sql->bindParam(':username', $username);
				$sql->bindParam(':name', $name);
				$sql->bindParam(':password1', $TempPassword);
				$sql->execute();
				echo "<script>alert('Registrado correctamente.')</script>";
		      	echo "<script>location.href='../index.php';</script>";
			}else{
				echo "<script>alert('Las contraseñas no coinciden.')</script>";
		    	echo "<script>location.href='../views/registro.php';</script>";
		    	$_SESSION['temp_username_temp_session'] = $username;
			}
		}
	}
	mysql_close($conexion);
	unset($sql);
	unset($conexion);
?>