<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM proyectos WHERE id_proyecto = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>