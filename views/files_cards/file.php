<?php
  session_start();
  if(!isset($_SESSION['name'])){
    echo "<script>location.href='../index.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Fichero</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<style type="text/css">
  input[type=file] {
  cursor: pointer;
  width: 28%;
  height: 45px;
  overflow: hidden;
}

input[type=file]:before {
  width: 158px;
  height: 32px;
  font-size: 16px;
  line-height: 32px;
  content: 'Select your file';
  display: inline-block;
  background: white;
  border: 1px solid #000;
  padding: 0 10px;
  text-align: center;
  font-family: Helvetica, Arial, sans-serif;
}

input[type=file]::-webkit-file-upload-button {
  visibility: hidden;
}
</style>

</head>
<body>
	<?php
		include '../nav_bar2.php';
	?>
<br>
<div class="main" align="center">
  <center><h1>Cargar múltiples archivos.</h1></center>
  <div class="panel panel-primary">
    <div class="panel-body">
      <br><br>
      <form name="MiForm" id="MiForm" method="post" action="../../includes/cargar.php" enctype="multipart/form-data">
        <div class="form-group">
         <div class="col-sm-6">
            <input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" multiple="">
          </div>
          <br><br>
          <button type="submit" class="btn btn-primary">Cargar archivos</button>
      </form>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>