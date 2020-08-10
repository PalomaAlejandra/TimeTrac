<?php
    require_once '../conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
  

    $consulta = "UPDATE roles SET nombre_rol = '$nombre' WHERE id_rol ='$id' ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>

