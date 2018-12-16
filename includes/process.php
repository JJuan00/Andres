<?php
	session_start();
	require '../conexion/conexion.php';
	if(isset($_POST['btn_inicio'])){
		/*recoleccion de input*/
		$username = $_POST['username'];
		$password1 = $_POST['password'];

	}elseif(isset($_POST['btn_registro'])){
		/*recoleccion de input*/
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$name = $_POST['name'];
		/*Proceso con el mysql*/
		/*Verificar si esta registrado el username*/
		$sql = "SELECT COUNT(*) FROM user_gestion username = :username";
		/*Preparo la sentencia*/
		$stmt = $conexion->prepare($sql);
		/*Ejecuto la sentencia*/
		$stmt->execute(array(':username' => $username));
		$result = $stmt->fetchColumn();
		if($result != 0){ /*Si en el campo de la colmuna existe el usuario*/
			echo "<script>alert('Ya estas registrado.')</script>";
    		echo "<script>location.href='../index.php';</script>";
		}else{
			if($password1 == $password2){
				$sql = $conexion-> prepare("INSERT INTO user_gestion(username, nombre, password) VALUES (:username, :name, :password1)");
				$sql->bindParam(':username', $username);
				$sql->bindParam(':name', $name);
				$sql->bindParam(':password1', $password);
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
?>