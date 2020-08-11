<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Tareas</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <?php require_once '../conexion.php';
     include_once '../header.php';
    ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="text-center">Detalles</h1>
              
                </div>
                

       <!--Tabla -->
                 <div class="col-lg-12">
                   <div class="tabla-responsive">
                       <table id="tablauser" class="table table-striped table-bordered table-condensed"  >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Estatus</th>
                                <th>Fecha De Inicio</th>
                                <th>Fecha De Fin</th>
                                <th>Duracion</th>
                                <th>Asignado por</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $consulta= "SELECT *
                                        FROM detalle
                                        INNER JOIN tareas
                                        ON  tareas_id_tarea = id_tarea 
                                        INNER JOIN estatus
                                        ON estatus_id_estatus = id_estatus
                                        INNER JOIN  usuarios
                                        ON id_asignador = id_usuario
                                        WHERE id_responsable = '".$_SESSION['id']."'
                                        ";

                            $resultado = mysqli_query($mysqli,$consulta);
                            $consulta2="SELECT CONCAT(
                                FLOOR(HOUR(TIMEDIFF(fecha_inicio, fecha_fin)) / 24), ' Dias ',
                                MOD(HOUR(TIMEDIFF(fecha_fin, fecha_inicio)), 24), ' Horas ',
                                MINUTE(TIMEDIFF(fecha_fin, fecha_inicio)), ' Minutos ',
                                SECOND(TIMEDIFF(fecha_fin, fecha_inicio)), ' Segundos') as total FROM detalle WHERE id_responsable = '".$_SESSION['id']."'";
                             $resultado2 = mysqli_query($mysqli,$consulta2);
                             while(($fila = mysqli_fetch_array($resultado)) && ($fila2 = mysqli_fetch_array($resultado2))){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $fila["id_tarea"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_tarea"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_estatus"];?></td>
                                <td class="text-center"><?php echo $fila["fecha_inicio"];?></td>
                                <td class="text-center"><?php echo $fila["fecha_fin"];?></td>
                                <td class="text-center"><?php echo $fila2["total"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_usr"];?></td>

                                <td>
                                    <div class="text-center">
                                        <div class="btn-group btn-sm col-xs-2">
                                          
                                        <a name="Inicio" value="1" href="accion.php?id=<?php echo $fila['id_detalle'];?>" class="btn btn-success"> <i class="fas fa-check-circle"></i> Iniciar Tarea </a>&nbsp;&nbsp;

                                        <a name="Inicio" value="2" href="accion2.php?id=<?php echo $fila['id_detalle'];?>" class="btn btn-warning"> <i class="fas fa-times-circle"></i> Finalizar Tarea</a>&nbsp;&nbsp;

                                      
                                         <a href="feditar.php?id=<?php echo $fila['id_tarea'];?>" class="btn btn-info"> <i class="fas fa-edit"></i> Editar</a>&nbsp;&nbsp;

                                         <a href="elimnardetalle.php?id=<?php echo $fila['id_detalle'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></i> Eliminar</a>&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </td>
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