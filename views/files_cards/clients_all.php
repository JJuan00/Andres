<?php 
	session_start();
	if(!isset($_SESSION['name'])){
        echo "<script>location.href='../../index.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Total clientes</title>
	<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<?php include '../nav_bar2.php'; ?>
	<br>
	<div align="center">
        <!-- <div class="form-group"> -->
        <div class="container my-5 text-center">
    	<!-- <div class="col-sm-6"> -->
            <button type="button" class="btn btn-primary btn-block" onclick="traer();">Obtener</button>
        <!-- </div> -->
        </div>
                   <div class="mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">C&oacute;digo factura.</th>
                            <th scope="col">Nombre(s).</th>
                            <th scope="col">Apellido(s).</th>
                            <th scope="col">Cedula.</th>
                            <th scope="col">Fecha facturaci&oacute;n.</th>
                            <th scope="col">Valor.</th>
                        </tr>
                    </thead>
                    <tbody id="contenido">
                        
                    </tbody>
            </table>
        </div>
	</div>        	

	
    <?php include 'script/script_all.php'; ?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>