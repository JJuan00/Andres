<?php
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '123456789');
		/*
		*dbname -> Nombre de la base de datos id8249078_gestion
		*juan -> Usuario del phpmyadmin id8249078_juan
		*root -> contraseña JuanDavid00
		*/
	}catch(PDOException $e){
		echo "Error -> " . $e->getMessage();
	}
?>
