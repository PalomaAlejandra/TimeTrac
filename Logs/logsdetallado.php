<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once '../conexion.php';
     include_once '../header.php';
    ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="text-center">Logs</h1>
                </div>
                <div class="col-lg-12">
                   <div class="tabla-responsive">
                       <table id="tablauser" class="table table-striped table-bordered table-condensed"  >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Accion</th>
                                <th>Descripcion</th>
                                <th>Fuente</th>
                                <th>Fecha</th>
                                <th>Responsable</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$consulta= "SELECT *FROM logs JOIN  usuarios ON responsable_log = id_usuario";
$resultado = mysqli_query($mysqli,$consulta);
while($fila = mysqli_fetch_array($resultado)){
?>
                         <tr>
                                <td class="text-center"><?php echo $fila["id_log"];?></td>
                                <td class="text-center"><?php echo $fila["accion_log"];?></td>
                                <td class="text-center"><?php echo $fila["descripcion_log"];?></td>
                                <td class="text-center"><?php echo $fila["fuente_log"];?></td>
                                <td class="text-center"><?php echo $fila["fecha_log"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_usr"];?></td>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                   </div>
               </div>
           </div>
       </div>
       </div>
       </div>  

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/113ad682b8.js" crossorigin="anonymous"></script>
</body>
</html>