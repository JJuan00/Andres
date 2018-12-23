<?php
    session_start();
    require '../conexion/conexion.php';
    $cod = $_POST['cod_factura'];
    $name = $_POST['name'];
    $cc = $_POST['cc'];

    if($cod != "" && $name != "" && $cc != ""){
        $sql = $conexion-> prepare("INSERT INTO client_gestion(cod_factura, cedula, nombre)VALUES(:cod_factura, :cc, :name)");
        $sql->bindParam(':cod_factura', $cod);
        $sql->bindParam(':cc', $cc);
        $sql->bindParam(':name', $name);
        $sql->execute();
        echo "<script>alert('Se registró correctamente.');</script>";
    }

?>
