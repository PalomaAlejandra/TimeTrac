<?php
    require_once '../conexion.php';
    $nombre =$_POST['nombre'];
  

    $consulta ="INSERT INTO tareas (nombre_tarea) VALUES ('$nombre')";
    mysqli_query($mysqli,$consulta);
    header("Location: index.php")  



?>