<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();
    $id = $_GET['id'];
    $consulta = "DELETE FROM usuarios WHERE id_usuario = $id";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('DELETE','Se ha eliminado un registro en la tabla','usuarios','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");
?>