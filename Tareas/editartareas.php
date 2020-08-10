<?php
    require_once '../conexion.php';
    $Tarea = $_POST['Tarea'];
    $id = $_POST['id'];
  

    $consulta = "UPDATE tareas SET nombre_tarea = '$Tarea' WHERE id_tarea =$id ";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");


?>
