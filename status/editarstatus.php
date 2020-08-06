<?php
    require_once '../conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
  

    $consulta = "UPDATE estatus SET nombre_estatus = '$nombre' WHERE id_estatus ='$id' ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>

