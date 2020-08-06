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
<body>
 <?php require_once '../conexion.php';
 $id =$_GET['id'];
 $consulta =" SELECT * FROM proyectos WHERE id_proyecto=$id";
 $resultado = mysqli_query($mysqli,$consulta);
 $fila=mysqli_fetch_array($resultado);
 ?>
    <!--formulario-->
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-12">
            <form action="editar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu Nombre" value="<?php echo $fila['nombre_proyecto'] ?>">
                </div>         

                <div class="form-group">
                    <input type="submit" value="Registra Proyecto" class="btn btn-success">
                    <a href ="index.php" type="button"  class="btn btn-primary  float-right mb-5">Regresar</a>
                </div>
            </form>
        </div>
        </div>
    </div>


  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>