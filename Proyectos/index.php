
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Proyectos</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/113ad682b8.js" crossorigin="anonymous"></script>
<body >
<?php require_once '../conexion.php';
include_once '../header.php';
?>
   
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                <a href ="formulario.php" class="btn btn-primary float-left mb-5"><i class="fas fa-plus"  ></i> Nuevo</a>  
                </div>
            </div>
            <div class="container mt-3">
        <div class="row">
            <?php
            $consulta= "SELECT * FROM proyectos";
            $resultado = mysqli_query($mysqli,$consulta);
            while($fila = mysqli_fetch_array($resultado)){
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                      <div class="card-body text-center">
                          <a href="detalle.php" class="font-weight-bold " ><?php echo $fila["nombre_proyecto"]; ?></a>
                            <div class="text-center">
                                        <div class="btn-group">
                                        <a href="../Tareas/formulario.php?id=<?php echo $fila['id_proyecto'];?>" class="btn btn-primary"> <i class="fas fa-plus-circle"></i>Agregar</a>
                                         <a href="feditar.php?id=<?php echo $fila['id_proyecto'];?>" class="btn btn-success"> <i class="fas fa-edit"></i> Editar</a>
                                         <a href="eliminar.php?id=<?php echo $fila['id_proyecto'];?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i>Eliminar</a>   
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>