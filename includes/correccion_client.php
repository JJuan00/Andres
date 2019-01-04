<?php
    session_start();
    if (isset($_SESSION['name'])) {
        require '../../conexion/conexion.php';
 		$stmt = $conexion->prepare("SELECT * FROM client_gestion");
    	$stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$df = array();
        $c = 0;
    		// array_push($df, $consulta);
?>
<?php
            // Hago el fetch() para traer las variables
            while ($row = $stmt->fetch()) {
                	$consulta = array('nombre' => $row['nombre'], 'apellido' => $row['apellido'], 'code_factura' => $row['cod_factura'], 'cc' => $row['cedula'], 'fecha' => $row['fecha'], 'precio' => $row['valor']);
                $c ++;

            ?>
            <form method="POST" action="../../includes/correccion.php">
                <div class="modal fade" id=<?php echo "\""."edit".$c."\""; ?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Editar anotaci&oacute;n</h4>
                        </div>
                        <div class="modal-body">
                            <!-- <form method="POST" action="../includes/delete.php"> -->
                                <input type="hidden" value=<?php echo "\"".$row['id']."\""; ?> name="id_edit">
                                <center><label for="name">Nombre(s)</label></center>
                                <input type="text" class="form-control" name="name_edit" id="name" value=<?php echo "\"".$row['nombre']."\""; ?>  placeholder=<?php echo "\"".$row['nombre']."\""; ?> autocomplete="off">
                                <center><label for="lastname">Apellido(s)</label></center>
                                <input type="text" class="form-control" name="lastname_edit" id="lastname" value=<?php echo "\"".$row['apellido']."\""; ?>  placeholder=<?php echo "\"".$row['apellido']."\""; ?> autocomplete="off">
                                <center> <label for="cod">C&oacute;digo de factura</label> </center>
                                <input type="text" class="form-control" name="cod_edit" id="cod" value=<?php echo "\"".$row['cod_factura']."\""; ?> placeholder=<?php echo "\"".$row['cod_factura']."\""; ?> >
                                <center> <label for="fecha">Fecha del servicio</label> </center>
                                <input type="date" class="form-control" name="fecha_edit" id="fecha" value=<?php echo "\"".$row['fecha']."\""; ?>>
                                <br>
                                <br>
                                <br>
                                <br>
                                <!-- <input type="text" name="" value=""> -->

                                <button type="submit" class="btn btn-primary" name="edit_c">Editar</button>
                                <button type="submit" class="btn btn-danger" name="delete_c" disabled="true">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php

        ?>

            <div align="center">
                <!-- <div class="card-columns" align="center"> -->
                  <div class="card bg-light" align="center" style="width: 52%;">
                    <div class="card-body text-center">
                        <div>
                             <span class="white-text"><strong><?php echo $row['nombre']." ".$row['apellido']; ?></strong></span>
                             <hr>
                             <p class="card-text"><strong>Cedula: </strong> <?php echo $row['cedula'] ?> </p>
                        </div>
                        <!-- <p>sdsdsdsd -->
                        </p>
                        <p class="card-text"><strong>Codigo: </strong> <?php echo $row['cod_factura']; ?> </p>
                        <p class="card-text"><strong>Total pago: </strong> <?php echo $row['valor']; ?></p>
                        <p class="card-text"><strong>Dia del servicio: </strong> <?php echo $row['fecha']; ?> </p>
                      <div>
                          <a class="navbar-brand" style="cursor: pointer;"  data-toggle="modal" data-target=<?php echo "\""."#edit".$c."\""; ?>>Editar</a>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->
        </div>
        <br>

        <?php
            }
            // mysql_close($conexion);
        ?>
    </section>


            <?php  echo "</tr>"; ?>
             <!-- <a class="navbar-brand" style="color: #FFF;cursor: pointer;"  data-toggle="modal" data-target=<?php echo "\""."#edit".$c."\""; ?>>Editar</a> -->
<?php
        }

?>
