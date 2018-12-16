<?php
	try{
		$conexion = new PDO('mysql:host=127.0.0.1;dbname=gestion', 'juan', 'root');
		/*
		*dbname -> Nombre de la base de datos
		*juan -> Usuario del phpmyadmin
		*root -> contraseña
		*/
	}catch(PDOException $e){
		echo "Error -> " . $e->getMessage();
	}
?>