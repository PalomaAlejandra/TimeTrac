
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
            <form action="insertar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu Nombre">
                </div>

                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingresa tu correo">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group">
                    <label for="rol">Categorias</label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="0">Seleccione la categoria:</option>
                        <?php
                        $consulta = "SELECT * FROM roles";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while ($fila = mysqli_fetch_array($resultado))
                        
                        {
                            ?>
                            <option value="<?php echo $fila["id_rol"]; ?>"><?php echo $fila["nombre_rol"];?></option>
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