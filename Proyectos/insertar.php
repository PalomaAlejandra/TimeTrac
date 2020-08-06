<?php
    require_once '../conexion.php';
    $nombre =$_POST['nombre'];
  

    $consulta ="INSERT INTO proyectos (nombre_proyecto) VALUES ('$nombre')";
    mysqli_query($mysqli,$consulta);
    header("Location: index.php")  



?>