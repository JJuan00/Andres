<?php
    session_start();
    include '../conexion/conexion.php';
    if (isset($_SESSION['name'])) {
        if (isset($_POST['edit_c'])) {
            // Recoger variables
            $name = $_POST['name_edit'];
            $lastname = $_POST['lastname_edit'];
            $cod_factura = $_POST['cod_edit'];
            $date = $_POST['fecha_edit'];
            // echo $name;
        }
    }else {
        echo "<script>location.href='../index.php';</script>";
    }
?>
