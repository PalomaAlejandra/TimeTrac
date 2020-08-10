<?php
    require_once '../conexion.php';
    $Permiso =$_POST['Permiso'];
    session_start();
    echo session_id();
  

    $consulta ="INSERT INTO roles (nombre_rol) VALUES ('$Permiso')";
    mysqli_query($mysqli,$consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('INSERT','Se ha agregado un registro en la tabla','Permisos','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php")  



?>