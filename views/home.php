<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "<script>location.href='../index.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
	<br><br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
