<?php
    require_once '../conexion.php';
    $Tarea = $_POST['Tarea'];
    $id = $_POST['id'];
    session_start();
    echo session_id();


    $consulta = "UPDATE tareas SET nombre_tarea = '$Tarea' WHERE id_tarea =$id ";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('UPDATE','Se ha actualizado un registro en la tabla','usuarios','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");


?>
