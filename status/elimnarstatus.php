<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM estatus WHERE id_estatus = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>