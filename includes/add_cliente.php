<?php
    session_start();
    if(isset($_SESSION['name'])){
        require '../conexion/conexion.php';
        $cod = $_POST['cod_factura'];
        $name = $_POST['name'];
        $cc = $_POST['cc'];
        $lt = $_POST['lastname'];
        $date = $_POST['f_data'];
        $precio = $_POST['valor'];
        // echo json_encode(['cod_factura'=> $cod, 'name'=>$name,'cc'=> $cc]);

        if($cod != "" && $name != "" && $cc != "" && $lt != "" && $precio != ""){
            // $sql = "SELECT COUNT(*) FROM client_gestion WHERE cod_factura = :cod_factura";
            // /*Preparo la sentencia*/
            // $stmt = $conexion->prepare($sql);
            // /*Ejecuto la sentencia*/
            // $stmt->execute(array(':cod_factura' => $cod));
            // /*Ejecuto el fetch de la asoc*/
            // $result = $stmt->fetchColumn();
            $stmt = $conexion->prepare("SELECT * FROM client_gestion WHERE cod_factura = :cod_factura");
            $result = $stmt->execute(array("cod_factura"=> $cod));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) != 0){
                $S = true;
                echo json_encode($S);
                // echo json_encode("Ya esta registrado");
            }else{
                $sql = $conexion-> prepare("INSERT INTO client_gestion(cod_factura, cedula, nombre, apellido, fecha, valor)VALUES(:cod_factura, :cc, :name, :lastname, :f_data, :valor)");
                $sql->bindParam(':cod_factura', $cod);
                $sql->bindParam(':cc', $cc);
                $sql->bindParam(':name', $name);
                $sql->bindParam(':lastname', $lt);
                $sql->bindParam(':f_data', $date);
                $sql->bindParam(':valor', $precio);
                $sql->execute();
                $S = false;
                echo json_encode($S);
                // $asd = array();
            }

            // echo "correcto";
            // exit();
            // echo "<script>alertify.success('Registrado correctamente.');</script>";
        }else{
            // echo "<script>alertify.error('Rectifique los campos.');</script>";
        }
    }

?>
