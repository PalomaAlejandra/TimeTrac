<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();
    $Status = $_POST['Status'];
    $id = $_POST['id'];
    
  

    $consulta = "UPDATE estatus SET nombre_estatus = '$Status' WHERE id_estatus =$id ";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('UPDATE','Se ha actualizado un registro en la tabla','Estatus','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");


?>

