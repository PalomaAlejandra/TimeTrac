<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de usuarios</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php require_once '../conexion.php';
    $id = $_GET["id"];
    $consulta = "SELECT * FROM usuarios WHERE id_usuario = $id";
    $resultado = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_array($resultado);
    ?>
<div class="container mt-5">
        <div class="row">
        <div class="col-sm-12">
            <form action="editar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu Nombre" value="<?php echo $fila['nombre_usr'] ?>">
                </div>

                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingresa tu correo" value="<?php echo $fila['correo_usr']?>">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" value="<?php echo $fila['password_usr']?>">
                    <input type="hidden" name="id" id="id" class="form-control" placeholder="" value="<?php echo $fila['id_usuario']?>">
                </div>
                <div class="form-group">
                    <label for="rol">Roles</label>
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