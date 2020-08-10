<?php
    require_once '../conexion.php';
    $nombre=$_POST['nombre'];
    $Usu =$_POST['Usu'];


    $consulta ="INSERT INTO tareas (nombre_tarea,usuarios_id_usuario) VALUES ('$nombre', '$Usu')";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php")

?>