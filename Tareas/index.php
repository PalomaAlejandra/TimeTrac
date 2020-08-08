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
                <h1 class="text-center">TAREAS</h1>
                <a href ="formulario.php" class="btn btn-primary float-left mb-5"><i class="fas fa-plus"  ></i> Nuevo</a>  
                </div>
                

       <!--Tabla -->
                 <div class="col-lg-12">
                   <div class="tabla-responsive">
                       <table id="tablauser" class="table table-striped table-bordered table-condensed"  >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Fecha De Creaccion</th>
                                <th>Responsable</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $consulta= "SELECT t.id_tarea,t.nombre_tarea, t.fecha_creacion, u.nombre_usr 
                                        FROM tareas t 
                                        INNER JOIN usuarios u
                                        ON t.usuarios_id_usuario=u.id_usuario";

                            $resultado = mysqli_query($mysqli,$consulta);
                            while($fila = mysqli_fetch_array($resultado)){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $fila["id_tarea"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_tarea"];?></td>
                                <td class="text-center"><?php echo $fila["fecha_creacion"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_usr"];?></td>

                                <td>
                                    <div class="text-center">
                                        <div class="btn-group">
                                         <a href="feditar.php?id=<?php echo $fila['id_tarea'];?>" class="btn btn-success"> <i class="fas fa-edit"></i> Editar</a>
                                         <a href="eliminar.php?id=<?php echo $fila['id_tarea'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></i> Eliminar</a>   
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