<?php
    require_once '../conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
  

    $consulta = "UPDATE proyectos SET nombre_proyecto = '$nombre' WHERE id_proyecto ='$id' ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>
