<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();
    $nombre=$_POST['nombre'];
    $Usu =$_POST['Usu'];


    $consulta ="INSERT INTO tareas (nombre_tarea,usuarios_id_usuario) VALUES ('$nombre', '$Usu')";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('INSERT','Se ha agregado un registro en la tabla','usuarios','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php")

?>