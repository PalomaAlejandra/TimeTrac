<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    session_start();
    echo session_id();
    $consulta = "DELETE FROM roles WHERE id_rol = $id";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('DELETE','Se ha eliminado un registro en la tabla','Permisos','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");
?>