<?php
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=id8249078_gestion', 'id8249078_juan', 'JuanDavid00');
		/*
		*dbname -> Nombre de la base de datos
		*juan -> Usuario del phpmyadmin
		*root -> contraseña
		*/
	}catch(PDOException $e){
		echo "Error -> " . $e->getMessage();
	}
?>