<?php 
	
	session_start(); 
	if(!isset($_SESSION['name'])){
		echo "<script>location.href='../index.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style_home.css">
	<title>Home</title>
	<!-- #ee6e73 -->

</head>
<body>
	<?php 
		include 'nav_bar.php';
	?>
	<script type="text/javascript">
		$(".dropdown-trigger").dropdown();
	</script>
	<br>
	<div>
		<?php 
			include '../views/cards.php';
		?>
	</div>

    
      
</body>
</html>