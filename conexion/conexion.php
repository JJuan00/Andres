<?php
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'juan', 'root');
		/*
		*dbname -> Nombre de la base de datos
		*juan -> Usuario del phpmyadmin
		*root -> contraseña
		*/
	}catch(PDOException $e){
		echo "Error -> " . $e->getMessage();
	}
?>