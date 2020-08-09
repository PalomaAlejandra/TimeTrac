<?php
    require_once '../conexion.php';
    $Tareas = $_POST['Tareas'];
    $id = $_POST['id'];
    
  

    $consulta = "UPDATE tareas SET nombre_tarea = '$Tareas' WHERE id_tarea =$id ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>

