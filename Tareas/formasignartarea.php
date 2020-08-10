<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Usuarios</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
 <?php require_once '../conexion.php';
 include_once '../header.php'; ?>
    <!--formulario-->
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-12">
            <form action="asignartarea.php" method="POST">
                <div class="form-group">
                    <label for="Tarea">Tarea</label>
                    <select name="Tarea" id="Tarea" class="form-control">
                        <option value="0">Seleccione la tarea:</option>
                        <?php
                        $consulta = "SELECT * FROM tareas";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_tarea"]; ?>"><?php echo $fila["nombre_tarea"];?></option>
                            <?php
                        }
                        ?>
                    </select>                
                </div>


                <div class="form-group">
                    <label for="proy">Proyecto</label>
                    <select name="proy" id="proy" class="form-control">
                        <option value="0">Seleccione el proyecto:</option>
                        <?php
                        $consulta = "SELECT * FROM proyectos";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_proyecto"]; ?>"><?php echo $fila["nombre_proyecto"];?></option>
                            <?php
                        }
                        ?>
                    </select>                
                </div>
                
                <div class="form-group">
                    <label for="usu">Responsable</label>
                    <select name="usu" id="usu" class="form-control">
                        <option value="0">Seleccione un usuario:</option>
                        <?php
                        $consulta = "SELECT * FROM usuarios";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_usuario"]; ?>"><?php echo $fila["nombre_usr"];?></option>
                            <?php
                        }
                        ?>
                    </select>                
                </div>


                <div class="form-group">
                    <input type="submit" value="Registra a tu usuario" class="btn btn-success">
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