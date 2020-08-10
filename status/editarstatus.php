<?php
    require_once '../conexion.php';
    $Status = $_POST['Status'];
    $id = $_POST['id'];
    
  

    $consulta = "UPDATE estatus SET nombre_estatus = '$Status' WHERE id_estatus =$id ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>

