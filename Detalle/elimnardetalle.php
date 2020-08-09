<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM detalle WHERE id_detalle = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>