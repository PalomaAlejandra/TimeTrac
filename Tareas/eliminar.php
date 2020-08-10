<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM tareas WHERE id_tarea = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>