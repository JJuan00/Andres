<?php
	session_start();
 	if(isset($_SESSION['name'])){
 		require '../conexion/conexion.php';
 		$stmt = $conexion->prepare("SELECT * FROM client_gestion");
    	$stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$df = array();
    	while ($row = $stmt->fetch()) {
    		$consulta = array('nombre' => $row['nombre'], 'apellido' => $row['apellido'], 'code_factura' => $row['cod_factura'], 'cc' => $row['cedula'], 'fecha' => $row['fecha'], 'precio' => $row['valor']);
    		array_push($df, $consulta);
		}

		echo json_encode($df);
		// exit();
	}

?>
