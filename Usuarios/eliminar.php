<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM usuarios WHERE id_usuario = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>