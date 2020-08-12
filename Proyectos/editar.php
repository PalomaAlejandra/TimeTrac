<?php
    require_once '../conexion.php';
    session_start();
    echo session_id();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
  

    $consulta = "UPDATE proyectos SET nombre_proyecto = '$nombre' WHERE id_proyecto ='$id' ";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('UPDATE','Se ha actualizado un registro en la tabla','Proyectos','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    
    header("Location: index.php");


?>
