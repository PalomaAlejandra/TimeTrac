<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once 'conexion.php';
      include_once 'header.php';
    ?>
 <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="text-center">Dashboard</h1>
                </div>
                

       <!--Tabla -->
                 <div class="col-lg-12">
                   <div class="tabla-responsive">
                       <table id="tablauser" class="table table-striped table-bordered table-condensed"  >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Proyecto</th>
                                <th>Total de horas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $consulta= "SELECT *
                                        FROM detalle
                                        INNER JOIN proyectos
                                        ON  proyectos_id_proyecto = id_proyecto
                                        WHERE estatus_id_estatus = '3'
                                        ";
                            $resultado = mysqli_query($mysqli,$consulta);
                            $consulta2="SELECT CONCAT(
                                FLOOR(HOUR(TIMEDIFF(fecha_inicio, fecha_fin)) / 24), ' Dias ',
                                MOD(HOUR(TIMEDIFF(fecha_fin, fecha_inicio)), 24), ' Horas ',
                                MINUTE(TIMEDIFF(fecha_fin, fecha_inicio)), ' Minutos ',
                                SECOND(TIMEDIFF(fecha_fin, fecha_inicio)), ' Segundos') as total FROM detalle WHERE estatus_id_estatus = '3' ORDER BY fecha_fin ASC";
                             $resultado2 = mysqli_query($mysqli,$consulta2);   
                            while(($fila = mysqli_fetch_array($resultado)) && ($fila2 = mysqli_fetch_array($resultado2))){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $fila["id_proyecto"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_proyecto"];?></td>
                                <td class="text-center"><?php echo $fila2["total"];?></td>
                            </tr>
                            <?php }
                             ?>
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