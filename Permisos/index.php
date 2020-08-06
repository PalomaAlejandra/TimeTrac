<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permisos</title>
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
                <h1 class="text-center">PERMISOS</h1>
                <a href="formpermiso.php" class="btn btn-primary float-left mb-5"> <i class="fas fa-plus"  ></i> Nuevo</a>
                </div>
            </div>
       </div>        

       <!--Tabla -->
       <div class="container mt-5">
           <div class="row">
               <div class="col-lg-12">
                   <div class="tabla-responsive">
                       <table id="tablauser" class="table table-striped table-bordered table-condensed" style="width: 100%;" >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre del rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $consulta= "SELECT * FROM roles";
                            $resultado = mysqli_query($mysqli,$consulta);
                            while($fila = mysqli_fetch_array($resultado)){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $fila["id_rol"];?></td>
                                <td class="text-center"><?php echo $fila["nombre_rol"];?></td>
                                <td>
                                    <div class="text-center">
                                        <div class="btn-group">
                                         
                                         <a href="elimnarpermiso.php?id=<?php echo $fila['id_rol'];?>" class="btn btn-danger"><i class="fas fa-trash"></i></i> Eliminar</a>   
                                         <a href="feditar.php?id=<?php echo $fila['id_rol'];?>" class="btn btn-success"><i class="fas fa-edit"></i> Editar</a>
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


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/113ad682b8.js" crossorigin="anonymous"></script>
</body>
</html>