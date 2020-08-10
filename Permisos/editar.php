<?php
    require_once '../conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    session_start();
    echo session_id();

    $consulta = "UPDATE roles SET nombre_rol = '$nombre' WHERE id_rol ='$id' ";
    mysqli_query($mysqli, $consulta);
    $consulta2 = "INSERT INTO logs (accion_log, descripcion_log, fuente_log, responsable_log) VALUES ('UPDATE','Se ha actualizado un registro en la tabla','Permisos','".$_SESSION['id']."')";
    mysqli_query($mysqli, $consulta2);
    header("Location: index.php");


?>

